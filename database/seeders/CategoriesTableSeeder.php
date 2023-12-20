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
    public function run(): void
    {
        // トランザクション開始
        DB::beginTransaction();

        try {
            // 外部キー制約の無効化
            Schema::disableForeignKeyConstraints();

            // 既存のデータがある場合は削除
            DB::table('categories')->delete();

            // データの挿入
            DB::table('categories')->insert([
                ['title' => 'Programming'],
                ['title' => 'Design'],
                ['title' => 'Marketing'],
                // 他にも必要なデータがあれば追加
            ]);

            // 外部キー制約の再有効化
            Schema::enableForeignKeyConstraints();

            // トランザクションのコミット
            DB::commit();

        } catch (\Exception $e) {
            // エラー発生時にロールバック
            DB::rollBack();
            throw $e;
        }
    }
}
