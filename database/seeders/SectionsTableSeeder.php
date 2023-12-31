<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SectionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // セクションデータの挿入
        DB::table('sections')->insert([
            ['title' => 'Variance', 'no' => 1, 'url' => 'https://d2rl9vvq6hawml.cloudfront.net/phpdb/php-basic-1.mp4', 'course_id' => 1],
            ['title' => 'Array', 'no' => 2, 'url' => 'https://d2rl9vvq6hawml.cloudfront.net/phpdb/php-basic-2.mp4', 'course_id' => 1],
            ['title' => 'Loop', 'no' => 3, 'url' => 'https://d2rl9vvq6hawml.cloudfront.net/phpdb/php-basic-3.mp4', 'course_id' => 1],
            ['title' => 'Condition', 'no' => 4, 'url' => 'https://d2rl9vvq6hawml.cloudfront.net/phpdb/php-basic-4.mp4', 'course_id' => 1],
            ['title' => 'Function', 'no' => 5, 'url' => 'https://d2rl9vvq6hawml.cloudfront.net/phpdb/php-basic-5.mp4', 'course_id' => 1],
            ['title' => 'Database', 'no' => 1, 'url' => 'https://d2rl9vvq6hawml.cloudfront.net/phpdb/php-db-1.mp4', 'course_id' => 2],
            ['title' => 'Variance', 'no' => 1, 'url' => 'https://d2rl9vvq6hawml.cloudfront.net/phpdb/python-basic-1.mp4', 'course_id' => 3],
            ['title' => 'HTML', 'no' => 1, 'url' => 'https://d2rl9vvq6hawml.cloudfront.net/phpdb/web-design-1.mp4', 'course_id' => 4],
            // 他にも必要なデータがあれば追加
        ]);
    }
}
