<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Support>
 */
class SupportFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        $validStatuses = ['Ativo', 'Pendente', 'Concluido'];

        return [
            'subject' => fake()->text(10),
            'status' => fake()->randomElement($validStatuses),
            'content' => fake()->sentence(),
        ];
    }
}
