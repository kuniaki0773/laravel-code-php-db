<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Eloquentを使用したデータの挿入
        User::create([
            'name' => 'user01',
            'password' => Hash::make('$2y$10$LNuN3PaMsK7jW..52DRi6eNhCaUmIJCLug2SilxPsTZmrB3gFt1Va')
        ]);

        // 通常のSQLクエリを使用したデータの挿入
        DB::table('users')->insert([
            'name' => 'kobayashi',
            'password' => Hash::make('kuni0773'),
        ]);
    }
}
