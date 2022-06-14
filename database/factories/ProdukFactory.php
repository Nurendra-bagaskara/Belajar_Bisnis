<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProdukFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nama_produk' => $this->faker->word(mt_rand(1,3)),
            'deskripsi' => $this->faker->paragraph(),
            'harga' => $this->faker->randomDigit(mt_rand(50000,1000000)),
        ];
    }
}
