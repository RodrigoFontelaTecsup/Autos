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
        Schema::create('autos', function (Blueprint $table) {
            $table->id();
            $table->string('Marca');
            $table->integer('Precio');
            $table->string('Color');
            $table->string('Kilometraje');
            $table->integer('Stock');
            $table->string('Categoria');
            $table->unsignedBigInteger('ID_Mantenimiento');        
            $table->foreign('ID_Mantenimiento')->references('id')->on('_Mantenimiento');
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
        Schema::dropIfExists('_autos');
    }
};
