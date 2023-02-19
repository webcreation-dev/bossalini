<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sizes_colors_products', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('product_id');
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');

            $table->string('size_id')->nullable();
            // $table->foreign('size_id')->references('id')->on('sizes')->onDelete('cascade');

            $table->string('color_id')->nullable();
            // $table->foreign('color_id')->references('id')->on('colors')->onDelete('cascade');

            $table->integer('quantity');

            $table->string('price');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sizes_colors_products');
    }
};
