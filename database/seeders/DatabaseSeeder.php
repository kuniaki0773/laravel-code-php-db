<?php

namespace Database\Seeders;

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
        // シーダーの呼び出し
        $this->call([
            CategoriesTableSeeder::class,
        ]);

        $this->call([
            CoursesTableSeeder::class,
        ]);

        $this->call([
            SectionsTableSeeder::class,
        ]);
    }
}
