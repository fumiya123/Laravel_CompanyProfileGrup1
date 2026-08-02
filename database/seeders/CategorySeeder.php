<?php

namespace Database\Seeders;

//use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            'name' => 'Kesehatan',
            'slug' => 'kesehatan',
            'color' => 'red'
        ]);
        Category::create([
            'name' => 'Pendidikan',
            'slug' => 'pendidikan',
            'color' => 'blue'
        ]);
        Category::create([
            'name' => 'Ekonomi & Bisnis',
            'slug' => 'ekonomi-bisnis',
            'color' => 'gray'
        ]);
        Category::create([
            'name' => 'Infrastuktur',
            'slug' => 'infrastuktur',
            'color' => 'violet'
        ]);
        Category::create([
            'name' => 'Teknologi & Komunikasi',
            'slug' => 'teknologi-komunikasi',
            'color' => 'green'
        ]);
    }
}
