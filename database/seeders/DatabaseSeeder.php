<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Producto;
use App\Models\Post;
use App\Models\Comentario;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        User::factory(20)->create()->each(function ($user) {
            $post = Post::factory()->create(['user_id' => $user->id]); 
            Producto::factory()->create(['seller_id' => $user->id]); 
            
            if (class_exists(Comentario::class)) {
                Comentario::factory()->create([
                    'user_id' => $user->id,
                    'post_id' => $post->id,
                ]);
            }
        });
    }
}
