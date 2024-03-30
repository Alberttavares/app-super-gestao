<?php

namespace Database\Factories;

use App\Models\SiteContato;
use Illuminate\Database\Eloquent\Factories\Factory;

class SiteContatoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nome' => $this->faker->name,
            'telefone' => $this->faker->phoneNumber,
            'email' => $this->faker->unique()->safeEmail,
            'motivo_contato' => $this->faker->numberBetween(1, 9), 
            'mensagem' => $this->faker->text(200),
        ];
    }
}


