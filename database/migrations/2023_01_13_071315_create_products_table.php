<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('length');
            $table->mediumText('color')->nullable();
            $table->longText('description')->nullable();
            $table->integer('original_price');// Prix d'achat
            $table->integer('quantity')->nullable();

            $table->unsignedBigInteger('category_id');
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
            $table->timestamps();

            // $table->string('SKU')->unique();
            // $table->json('tag_id')->nullable();
             // $table->integer('selling_price'); // Prix de vente sur le site
            // $table->integer('quantity')->default('1');
            // $table->tinyInteger('status')->default('0');// 0 = Produit visible, 1 = Produit cahé
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
