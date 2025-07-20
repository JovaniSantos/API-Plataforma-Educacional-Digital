<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Knuckles\Scribe\Attributes\Group;
use Knuckles\Scribe\Attributes\Endpoint;
use Knuckles\Scribe\Attributes\BodyParam;

/**
 * @group Autenticação
 * API para autenticação de usuários
 */
class AuthController extends Controller
{

       /**
     * @OA\Post(
     *     path="/v1/register",
     *     summary="Registrar um novo usuário",
     *     tags={"Authentication"},
     *     @OA\RequestBody(
     *         required=true,
     *         @OA\JsonContent(
     *             required={"email", "password", "confirmPassword", "firstName", "lastName", "userType"},
     *             @OA\Property(property="email", type="string", format="email", example="user@example.com"),
     *             @OA\Property(property="password", type="string", format="password", example="password123"),
     *             @OA\Property(property="confirmPassword", type="string", format="password", example="password123"),
     *             @OA\Property(property="firstName", type="string", example="João"),
     *             @OA\Property(property="lastName", type="string", example="Silva"),
     *             @OA\Property(property="phone", type="string", example="+244 912 345 678"),
     *             @OA\Property(property="dateOfBirth", type="string", format="date", example="1990-01-01"),
     *             @OA\Property(property="gender", type="string", enum={"M", "F"}, example="M"),
     *             @OA\Property(property="address", type="string", example="Luanda, Kilamba"),
     *             @OA\Property(property="userType", type="string", enum={"student", "teacher", "admin"}, example="student"),
     *             @OA\Property(property="school", type="string", example="escola-central"),
     *             @OA\Property(property="class", type="string", example="1-classe"),
     *             @OA\Property(property="parentName", type="string", example="Maria Silva"),
     *             @OA\Property(property="parentPhone", type="string", example="+244 923 456 789"),
     *             @OA\Property(property="qualification", type="string", example="Licenciatura"),
     *             @OA\Property(property="specialization", type="string", example="Matemática"),
     *             @OA\Property(property="experience", type="integer", example=5),
     *             @OA\Property(property="course", type="string", example="Engenharia Informática")
     *         )
     *     ),
     *     @OA\Response(
     *         response=201,
     *         description="Usuário registrado com sucesso",
     *         @OA\JsonContent(
     *             @OA\Property(property="status", type="string", example="success"),
     *             @OA\Property(property="message", type="string", example="Registro realizado com sucesso. Aguarde aprovação do administrador."),
     *             @OA\Property(property="data", type="object")
     *         )
     *     ),
     *     @OA\Response(response=422, description="Erro de validação"),
     *     @OA\Response(response=500, description="Erro interno do servidor")
     * )
     */
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:6',
            'confirmPassword' => 'required|same:password',
            'firstName' => 'required|string|max:100',
            'lastName' => 'required|string|max:100',
            'phone' => 'nullable|string|max:20',
            'dateOfBirth' => 'nullable|date',
            'gender' => 'nullable|in:M,F',
            'address' => 'nullable|string',
            'userType' => 'required|in:student,teacher,admin',
            'school' => 'nullable|string|max:255',
            'class' => 'nullable|string|max:20',
            'parentName' => 'nullable|string|max:255',
            'parentPhone' => 'nullable|string|max:20',
            'qualification' => 'nullable|string|max:50',
            'specialization' => 'nullable|string|max:100',
            'experience' => 'nullable|integer',
            'course' => 'nullable|string|max:100',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'message' => 'Validation failed',
                'errors' => $validator->errors(),
            ], 422);
        }

        try {
            $userData = $request->only(['email', 'firstName', 'lastName', 'phone', 'dateOfBirth', 'gender', 'address']);
            $userData['password_hash'] = Hash::make($request->password);
            $userData['user_type'] = $request->userType;
            $userData['status'] = 'pending'; // Requer aprovação para admin, opcional para outros

            $user = User::create($userData);

            // Adicione lógica para students
            if ($request->userType === 'student') {
                Student::create([
                    'user_id' => $user->id,
                    'student_number' => 'STU-' . $user->id,
                    'education_level' => $request->class ? ($request->class.includes('ano') ? 'Universitário' : 'Ensino Primário') : 'Ensino Primário',
                    'grade_level' => $request->class,
                    'course' => $request->course,
                    'enrollment_date' => now(),
                    'parent_name' => $request->parentName,
                    'parent_phone' => $request->parentPhone,
                ]);
            }

            // Adicione lógica para teachers
            if ($request->userType === 'teacher') {
                Teacher::create([
                    'user_id' => $user->id,
                    'employee_number' => 'TCH-' . $user->id,
                    'qualification' => $request->qualification,
                    'specialization' => $request->specialization,
                    'years_experience' => $request->experience,
                    'hire_date' => now(),
                ]);
            }

            // Adicione lógica para administrators
            if ($request->userType === 'admin') {
                Administrator::create([
                    'user_id' => $user->id,
                    'role' => 'admin',
                    'permissions' => json_encode(['manage_users' => true]),
                ]);
            }

            return response()->json([
                'status' => 'success',
                'message' => 'Registro realizado com sucesso. Aguarde aprovação do administrador.',
                'data' => $user,
            ], 201);
        } catch (QueryException $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Falha ao registrar usuário',
                'error' => $e->getMessage(),
            ], 500);
        }
    }
    /**
     * @endpoint Login do usuário
     * @bodyParam email string required Email do usuário
     * @bodyParam password string required Senha do usuário
     */

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt(['email' => $credentials['email'], 'password' => $credentials['password']])) {
            $user = Auth::user();
            $token = $user->createToken('auth_token')->plainTextToken;
            return response()->json(['token' => $token, 'user' => $user], 200);
        }

        return response()->json(['error' => 'Credenciais inválidas'], 401);
    }

    /**
     * @endpoint Logout do usuário
     * @authenticated
     */
    public function logout(Request $request)
    {
        $request->user()->currentAccessToken()->delete();
        return response()->json(['message' => 'Logout realizado com sucesso'], 200);
    }
}
