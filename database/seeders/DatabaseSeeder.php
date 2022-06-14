<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Deskripsi;
use App\Models\Produk;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // User::factory(5)->create();

        // Category::create([
        //     'name' => 'Introduction',
        //     'slug' => 'introduction'
        // ]);

        // Category::create([
        //     'name' => 'Additional Blog',
        //     'slug' => 'additional-blog'
        // ]);

        // Category::create([
        //     'name' => 'Erigo Story',
        //     'slug' => 'Erigo-story'
        // ]);

        // Deskripsi::factory(5)->create();
        Produk::factory(5)->create();
    }
}
