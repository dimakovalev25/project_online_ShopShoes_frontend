<?php

use App\Models\Product;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('sizes', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->decimal('size', 2, 1)->unique();

        });
    }

    public function down(): void
    {
        Schema::dropIfExists('sizes');
    }
};
