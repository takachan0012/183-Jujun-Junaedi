<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;


use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        DB::table('roles')->insert([
            [
                'id' => 1,
                'name' => 'admin',
            ],
            [
                'id' => 2,
                'name' => 'user',
            ]
        ]);

        DB::table('status_transaction')->insert([
            [
                'id' => 1,
                'name' => 'paid off',
            ],
            [
                'id' => 2,
                'name' => 'debt',
            ]
        ]);

        DB::table('category_transaction')->insert([
            [
                'id' => 1,
                'name' => 'expense',
            ],
            [
                'id' => 2,
                'name' => 'income',
            ]
        ]);

        User::create([
            'name' => 'taka',
            'email' => 'test@gmail.com',
            'password' => bcrypt('admin123'),
            'role_id' => 1,
        ]);
    }
}
