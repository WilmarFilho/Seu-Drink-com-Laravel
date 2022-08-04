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
            $table->string('nome', 40);
            $table->string('bebida', 50);
            $table->string('bebida_adicional', 50);
            $table->string('suco_fruta', 50);
            $table->string('suco_fruta_adicional', 50);
            $table->string('ingrediente', 50);
            $table->string('ingrediente_adicional_1', 50);
            $table->string('ingrediente_adicional_2', 50);
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
