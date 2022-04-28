<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'description' => "Mon chat est trop mignon",
            'img_url' => "https://pbs.twimg.com/profile_images/1467283777177239563/36HU69Rz_400x400.jpg",
            'user_id' => 1,
        ];
    }
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    protected $fillable = [
        'description',
        'img_url',
        'user_id',
    ];
    
}
