<?php

namespace Database\Seeders;

//use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Level;

class LevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Level::create([
            'nama_level' => 'Easy',
            'slug' => 'easy',
            'color' => 'red'
        ]);
        Level::create([
            'nama_level' => 'Medium',
            'slug' => 'medium',
            'color' => 'blue'
        ]);
        Level::create([
            'nama_level' => 'Hard',
            'slug' => 'hard',
            'color' => 'gray'
        ]);
        Level::create([
            'nama_level' => 'Endless',
            'slug' => 'endless',
            'color' => 'violet'
        ]);
    }
}
