<?php

namespace Database\Factories;

use App\Models\PriceQuote;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PriceQuote>
 */
class PriceQuoteFactory extends Factory
{
    protected $model = PriceQuote::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nameQuote' => 'Name of Quote'
        ];
    }
}
