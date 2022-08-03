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
        Schema::create('drinks', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nome', 25);
            $table->string('bebida', 35);
            $table->string('bebida_adicional', 35);
            $table->string('suco_fruta', 35);
            $table->string('suco_fruta_adicional', 35);
            $table->string('ingrediente', 35);
            $table->string('ingrediente_adicional_1', 35);
            $table->string('ingrediente_adicional_2', 35);
            $table->string('img', 45);
            $table->string('preparo', 350);   
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('drinks');
    }
};
