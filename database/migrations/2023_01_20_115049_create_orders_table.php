<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('first_name')->default('John');
            $table->string('last_name')->default('Doe');
            $table->string('company')->default('johndoe@gmail.com')->nullable();
            $table->string('apartment')->default('19 Route de Florisant')->nullable();
            $table->string('city')->default('Paris');
            $table->string('country')->default('France');
            $table->string('zip_code')->default('1206')->nullable();
            $table->string('phone');
            $table->string('status')->default('default');


            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

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
        Schema::dropIfExists('orders');
    }
}
