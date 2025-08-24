<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Gift;
use Illuminate\Support\Arr;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Gift>
 */
class GiftFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */

    protected $model = Gift::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $produtos = [
            'Torradeira',
            'Microondas',
            'Geladeira',
            'Fogão',
            'Lava Louças',
            'Aspirador',
            'Lava Roupas',
            'Secadora',
            'Ar Condicionado',
            'Ventilador',
            'Batedeira',
            'Liquidificador',
            'Sanduicheira',
            'Purificador de Água',
            'Cafeteira',
            'Fritadeira',
            'Churrasqueira Elétrica',
            'Espremedor de Frutas',
            'Processador de Alimentos',
            'Forno Elétrico'
        ];

        return [
            'name' => $this->faker->randomElement($produtos),
            'description' => $this->faker->text(100),
            'price' => $this->faker->randomFloat(2, 1, 999),
            'image' => $this->faker->imageUrl(),
            'people_id' => Arr::random([1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20]),
            'quantity' => Arr::random([1, 2, 3]),
        ];
    }
}
