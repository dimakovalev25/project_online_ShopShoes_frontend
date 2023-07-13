<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('user_id')->index()->constrained('users');
            $table->jsonb('products');
            $table->integer('total_price');
            $table->unsignedSmallInteger('payment_status')->default(1);
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
