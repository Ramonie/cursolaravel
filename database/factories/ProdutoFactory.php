<?php
namespace Database\Factories;

use App\Models\Categoria;
use App\Models\Produto;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProdutoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $users = User::pluck('id');
        $categorias = Categoria::pluck('id');
        
        return [
            'descricao' => $this->faker->paragraph(),
            'preco' => $this->faker->randomNumber(2),
            'nome' => $this->faker->unique()->sentence(), // Gera um nome aleatório para o produto
            'imagem' => $this->faker->imageUrl(400, 400),
            'id_user' => $users->isNotEmpty() ? $users->random() : User::factory()->create()->id,
            'id_categoria' => $categorias->isNotEmpty() ? $categorias->random() : Categoria::factory()->create()->id,
        ];
    }
}
