<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Student\StudentController;
use App\Http\Controllers\Teacher\TeacherController;
use App\Http\Controllers\Admin\SchoolController;
use App\Http\Controllers\Admin\SubjectController;
use App\Http\Controllers\Admin\ClasseController;
use App\Http\Controllers\Student\EnrollmentController;
use App\Http\Controllers\Teacher\TeacherAssignmentController;
use App\Http\Controllers\Teacher\ActivityController;
use App\Http\Controllers\Teacher\ActivityQuestionController;
use App\Http\Controllers\Student\SubmissionController;
use App\Http\Controllers\Student\SubmissionAnswerController;
use App\Http\Controllers\Student\GradeController;
use App\Http\Controllers\Teacher\AttendanceController;
use App\Http\Controllers\Teacher\MaterialController;
use App\Http\Controllers\Admin\ForumCategoryController;
use App\Http\Controllers\ForumTopicController;
use App\Http\Controllers\ForumReplyController;
use App\Http\Controllers\Admin\CalendarEventController;
use App\Http\Controllers\EventParticipantController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\Admin\SystemSettingController;
use App\Http\Controllers\Admin\AuditLogController;
use App\Http\Controllers\Admin\CourseController;
use App\Http\Controllers\Admin\EnrollmentRequestController;
use App\Http\Controllers\Teacher\TeacherAssignmentRequestController;


    Route::get('/teste', function () {
        return view('welcome');
    });
/*
 * Rotas da API v1 do EduAngola
 * Todas as rotas estão sob o prefixo 'v1' e usam autenticação Sanctum
 */
Route::prefix('v1')->group(function () {
    // Rotas públicas (sem autenticação)
    Route::post('login', [AuthController::class, 'login']);
    Route::post('logout', [AuthController::class, 'logout'])->middleware('auth:sanctum');
    Route::apiResource('forum-likes', '\App\Http\Controllers\ForumLikeController');

    // Rotas protegidas por autenticação
    Route::middleware('auth:sanctum')->group(function () {
        // Rotas para Admins
        Route::prefix('admin')->middleware('role:admin')->group(function () {
            Route::apiResource('admins', AdminController::class);
            Route::apiResource('schools', SchoolController::class);
            Route::apiResource('subjects', SubjectController::class);
            Route::apiResource('classes', ClasseController::class);
            Route::apiResource('forum-categories', ForumCategoryController::class);
            Route::apiResource('calendar-events', CalendarEventController::class);
            Route::apiResource('system-settings', SystemSettingController::class);
            Route::apiResource('audit-logs', AuditLogController::class);
            Route::apiResource('courses', 'CourseController');
            Route::apiResource('enrollment-requests', 'EnrollmentRequestController');
            Route::apiResource('user-sessions', '\App\Http\Controllers\UserSessionController');

            // Métodos personalizados para admins (exemplo)
            Route::post('audit-logs/export', [AuditLogController::class, 'export'])->name('audit-logs.export');
        });

        // Rotas para Professores
        Route::prefix('teacher')->middleware('role:teacher')->group(function () {
            Route::apiResource('teachers', TeacherController::class);
            Route::apiResource('teacher-assignments', TeacherAssignmentController::class);
            Route::apiResource('assessments', '\App\Http\Controllers\Teacher\AssessmentController');
            Route::apiResource('activities', ActivityController::class);
            Route::apiResource('activity-questions', ActivityQuestionController::class);
            Route::apiResource('attendance', AttendanceController::class);
            Route::apiResource('materials', MaterialController::class);
            Route::apiResource('teacher-assignment-requests', 'TeacherAssignmentRequestController');

            // Métodos personalizados para professores (exemplo)
            Route::post('attendance/bulk', [AttendanceController::class, 'bulkStore'])->name('attendance.bulk');
        });

        // Rotas para Estudantes
        Route::prefix('student')->middleware('role:student')->group(function () {
            Route::apiResource('students', StudentController::class);
            Route::apiResource('enrollments', EnrollmentController::class);
            Route::apiResource('submissions', SubmissionController::class);
            Route::apiResource('submission-answers', SubmissionAnswerController::class);
            Route::apiResource('grades', GradeController::class);

            // Métodos personalizados para estudantes (exemplo)
            Route::get('grades/summary', [GradeController::class, 'summary'])->name('grades.summary');
        });

        // Rotas genéricas (acessíveis por todos os usuários autenticados)
        Route::apiResource('forum-topics', ForumTopicController::class);
        Route::apiResource('forum-replies', ForumReplyController::class);
        Route::apiResource('event-participants', EventParticipantController::class);
        Route::apiResource('notifications', NotificationController::class);
        Route::apiResource('messages', MessageController::class);

        // Métodos personalizados genéricos (exemplo)
        Route::post('notifications/mark-all-read', [NotificationController::class, 'markAllRead'])->name('notifications.mark-all-read');
        Route::get('messages/conversation/{userId}', [MessageController::class, 'conversation'])->name('messages.conversation');
    });


    Route::get('/teste-api', function () {
        return view('welcome');
    });
});
