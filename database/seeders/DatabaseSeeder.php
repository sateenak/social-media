<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Posting;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(3)->create();
        Posting::factory(20)->create();
        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);
        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);
        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);
    }
}
