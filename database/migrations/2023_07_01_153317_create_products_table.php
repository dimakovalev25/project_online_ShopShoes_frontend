<?php

use App\Models\Category;
use App\Models\Tag;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('title',110);
            $table->string('article');
            $table->text('description');
            $table->string('brand');
            $table->string('preview_image');
            $table->integer('price');
            $table->integer('count');
            $table->boolean('is_published');

            $table->foreignIdFor(Category::class)->constrained();


            $table->softDeletes();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
