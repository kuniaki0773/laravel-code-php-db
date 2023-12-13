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
        // 他のシーダーがあればここで呼び出す
        $this->call([
            CoursesTableSeeder::class,
            // 他のシーダーがあればここで呼び出す
        ]);
    }
}
