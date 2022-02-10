<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $title = $this->faker->sentence;
        $slug = Str::slug($title);
        return [
            //
            'name' =>$title,//$this->faker->words(5,true),
            'price' => $this->faker->randomFloat(2,10,100),
            'description' =>$this->faker->realText(200),
            'category_id' => Category::all()->random()->id,
            'quantity' => 10,
            'slug' => $slug,
            'img_src' => 'https://via.placeholder.com/300?text=Amado',
        ];
    }
}
