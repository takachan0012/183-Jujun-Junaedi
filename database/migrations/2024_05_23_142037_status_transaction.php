<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;


return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        //
        Schema::create('status_transaction', function (Blueprint $table) {
            $table->id();
            $table->string('name');
        });

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
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
