<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\Category;
use App\Models\Product;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'name' => 'raikhan',
            'email' => 'raikhan@gmail.com',
            'password' => Hash::make('12345678'),
        ]);

        //category factory
        Category::factory(2)->create();

        //product factory 100
        Product::factory(100)->create();
    }
}
