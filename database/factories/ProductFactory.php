<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    protected $model = Product::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $faker = \Faker\Factory::create();
        return [
            'productName' => "Product Name",
            'price-quote_id' => $faker->randomDigitNot(0),
            'productNumber' => $faker->address,
            'image' => $faker->url,
            'productIntroduce' => $faker->text($maxNbChars = 200),
            'productContent' => $faker->text($maxNbChars = 200),
            'productPrice' => $faker->randomFloat($nbMaxDecimals = NULL, $min = 0, $max = NULL)
        ];
    }
}
