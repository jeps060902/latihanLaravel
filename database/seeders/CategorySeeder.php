<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\Kategori;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Kategori::create([
            'name' => 'Machine Learning',
            'slug' => 'machine-learning'
        ]);
        Kategori::create([
            'name' => 'Data Structure',
            'slug' => 'data-scructure'
        ]);
        Kategori::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);
        Kategori::create([
            'name' => 'UI UX',
            'slug' => 'ui-ux'
        ]);
    }
}
