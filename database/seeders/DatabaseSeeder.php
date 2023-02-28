<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Product;
use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        User::factory()
            ->count(3)
            ->has(Product::factory()->count(2))
            ->create();
    }
}
