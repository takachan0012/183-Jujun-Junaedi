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
                'name' => 'Admin',
            ],
            [
                'id' => 2,
                'name' => 'User',
            ]
        ]);

        DB::table('status_transactions')->insert([
            [
                'id' => 1,
                'name' => 'Paid Off',
            ],
            [
                'id' => 2,
                'name' => 'Debt',
            ],
            [
                'id' => 3,
                'name' => 'Receivable',
            ]
        ]);

        DB::table('category_transactions')->insert([
            [
                'id' => 1,
                'name' => 'Expense',
            ],
            [
                'id' => 2,
                'name' => 'Income',
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
