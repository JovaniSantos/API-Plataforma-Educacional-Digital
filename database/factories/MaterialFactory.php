<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Material;
use App\Models\Subject;
use App\Models\Classe;
use App\Models\Teacher;

class MaterialFactory extends Factory
{
    protected $model = Material::class;

    public function definition()
    {
        return [
            'title' => $this->faker->sentence,
            'description' => $this->faker->paragraph,
            'file_path' => $this->faker->url,
            'file_type' => $this->faker->randomElement(['pdf', 'doc', 'video', 'image', 'other']),
            'subject_id' => Subject::factory(),
            'class_id' => Classe::factory(),
            'uploaded_by' => Teacher::factory(),
            'status' => $this->faker->randomElement(['active', 'archived']),
        ];
    }
}
