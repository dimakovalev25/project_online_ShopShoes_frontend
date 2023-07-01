<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('title',110);
            $table->text('description');
            $table->string('content');
            $table->string('preview_image');
            $table->integer('price');
            $table->integer('count');
            $table->boolean('is_published');

            $table->foreignId('user_id')->nullable()->index()->constrained('users');
            $table->foreignId('category_id')->nullable()->index()->constrained('categories');



            $table->softDeletes();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
