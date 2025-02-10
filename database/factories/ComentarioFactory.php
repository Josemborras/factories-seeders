<?php

namespace Database\Factories;

use App\Models\Comentario;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Comentario>
 */
class ComentarioFactory extends Factory
{
    protected $model = Comentario::class;

    public function definition()
    {
        return [
            'user_id' => User::factory(), // Relacionar con un usuario existente o generar uno nuevo
            'post_id' => Post::factory(), // Relacionar con un post existente o generar uno nuevo
            'comment' => $this->faker->paragraph(),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
