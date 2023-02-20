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
        Schema::create('addresses', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

            $table->string('first_name')->default('John');
            $table->string('last_name')->default('Doe');
            $table->string('email')->default('johndoe@gmail.com')->nullable();
            $table->string('apartment')->default('19 Route de Florisant')->nullable();
            $table->string('city')->default('France');
            $table->string('country')->default('France');;
            $table->string('zip_code')->default('1206')->nullable();
            $table->string('phone');
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
        Schema::dropIfExists('addresses');
    }
};
