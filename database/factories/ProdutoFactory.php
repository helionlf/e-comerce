<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Produto>
 */
class ProdutoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {

        $nome = $this->faker->unique()->sentence();
        return [
            'nome' => $nome,
            'descricao' => $this->faker->paragraph(),
            'valor' => $this->faker->randomNumber(2),
            'slug' => Str::slug($nome),
            'imagem' => $this->faker->imageUrl(400, 400),
            'estoque' =>  $this->faker->numberBetween(0, 100),
        ];
    }
}
