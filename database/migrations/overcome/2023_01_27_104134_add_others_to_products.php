<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddOthersToProducts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('products', function (Blueprint $table) {
            //
            $table->integer('sale_price')->after('selling_price')->nullable(); // Prix promotionnelle
            $table->tinyInteger('deal')->after('status')->default('0');// 0 = invisible dans les affaire du jour, 1 = Produit cahé
            $table->tinyInteger('selection')->after('quantity')->default('0');// 0 = invisible dans nos recommendation, 1 = Produit cahé


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('products', function (Blueprint $table) {
            //
        });
    }
}
