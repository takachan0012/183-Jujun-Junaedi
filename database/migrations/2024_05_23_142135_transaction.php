<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        //
        Schema::create('transaction', function (Blueprint $table) {
            $table->uuid('user_id');
            $table->foreignId('status_id')->constrained('status_transaction');
            $table->foreignId('customer_id')->constrained('customer_transaction');
            $table->foreignId('category_id')->constrained('category_transaction');
            $table->float('amount', 1);
            $table->timestamps();
            $table->text('note');

            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
