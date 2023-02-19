<?php

use App\Models\Product;
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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name', 60);
            $table->string('slug');
            $table->text('description');
            $table->float('price');
            $table->integer('quantity')->nullable();
            $table->enum('status', [Product::INACTIVE, Product::ACTIVE])->default(Product::INACTIVE);
            $table->unsignedBigInteger('subcategory_id');
            $table->foreign('subcategory_id')
                ->references('id')
                ->on('subcategories');
            $table->unsignedBigInteger('brand_id');
            $table->foreign('brand_id')
                ->references('id')
                ->on('brands');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
