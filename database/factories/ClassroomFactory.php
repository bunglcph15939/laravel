<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\str;
use Illuminate\Database\Eloquent\Factories\Factories;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Classroom>
 */
class ClassroomFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {

        return [
            'name'=>$this->faker->name(),
            'desc'=>$this->faker->text(),
            'code'=>Str::random(6),
            'status'=>rand(0,1),
            'user_id'=>rand(1,10)
        ];
    }
}
