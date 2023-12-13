<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class CoursesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // データの挿入
        DB::table('courses')->insert([
            ['title' => 'PHP Basic', 'learning_time' => 30, 'category_id' => 1],
            ['title' => 'PHP Database', 'learning_time' => 50, 'category_id' => 1],
            ['title' => 'Python Basic', 'learning_time' => 40, 'category_id' => 1],
            ['title' => 'Web Design', 'learning_time' => 50, 'category_id' => 2],
            // 他にも必要なデータがあれば追加
        ]);
    }
}
