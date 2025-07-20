<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\SystemSetting;

class SystemSettingFactory extends Factory
{
    protected $model = SystemSetting::class;

    public function definition()
    {
        return [
            'setting_key' => $this->faker->unique()->word,
            'setting_value' => $this->faker->word,
            'description' => $this->faker->sentence,
        ];
    }
}
