<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // データの挿入
        DB::table('categories')->insert([
            ['title' => 'Programming'],
            ['title' => 'Design'],
            ['title' => 'Marketing'],
            // 他にも必要なデータがあれば追加
        ]);
    }
}
