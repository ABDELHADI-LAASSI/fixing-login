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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('user_id')->references('id')->on('users')->cascadeOnDelete();
            $table->integer('status')->default(0);
            $table->string('payment_method');
            $table->string('payment_status');
            $table->string('payment_id');
            $table->decimal('total_price', 10, 2);
            $table->string('address');
            $table->string('phone');
            $table->string('email');
            $table->string('name');
            $table->string('surname');
            $table->string('city');
            $table->string('postal_code');
            $table->string('country');
            $table->decimal('shipping_price', 10, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
