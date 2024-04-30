<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create(['name' => 'Fiction']);
        Category::create(['name' => 'Non-Fiction']);
        Category::create(['name' => 'Science']);
        Category::create(['name' => 'Fantasy']);
        Category::create(['name' => 'Biography']);
    }
}
    

