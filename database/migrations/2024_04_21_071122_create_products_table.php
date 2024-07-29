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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->integer('category_id')->nullable();
            $table->integer('occution_id')->nullable();
            $table->integer('sub_occution_id')->nullable();
            $table->integer('sub_category_id')->nullable();
            $table->integer('brand_id')->nullable();
            $table->text('product_title')->nullable();
            $table->integer('designer_id')->nullable();
            $table->text('product_short_description')->nullable();
            $table->string('sku')->nullable();
            $table->string('discount')->nullable();
            $table->string('discount_type')->nullable();
            $table->string('product_slug')->nullable();
            $table->text('description')->nullable();
            $table->text('product_thumbail')->nullable();
            $table->text('product_back_image')->nullable();
            $table->text('cover_image')->nullable();
            $table->text('video_url')->nullable();
          
            $table->text('prod_status')->nullable();
            $table->text('default_product_enable')->nullable();
            $table->text('exhibition_enable')->nullable();
            $table->text('tax_enable')->nullable();
            $table->text('feature_product_enable')->nullable();
            $table->text('todays_deal_enable')->nullable();
            $table->text('in_stock')->nullable();
            $table->integer('created_by')->nullable();
            $table->integer('updated_by')->nullable();
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
