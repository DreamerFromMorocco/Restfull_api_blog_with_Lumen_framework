<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    protected $model = Post::class;

    public function definition()
    {
    	return [
            
                'content' => $this->faker->paragraph,
                'title' => $this->faker->sentence,
                'status'=>'published',
                'user_id'=>5,
              
            
    	];
    }
}
