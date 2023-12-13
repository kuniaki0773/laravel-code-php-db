<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
   {
        // 既存のデータがある場合は削除
        DB::table('categories')->truncate();

        // データの挿入
        DB::table('categories')->insert([
            ['title' => 'Category 1'],
            ['title' => 'Category 2'],
            // 他にも必要なデータがあれば追加
        ]);
    }
}
