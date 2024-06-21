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
        Schema::create('plans', function (Blueprint $table) {
            $table->id();
            $table->float('ter_muerte'); //nacionalidad
            $table->float('ter_invalidez');            
            $table->float('ter_medicos');

            $table->float('ocu_muerte');
            $table->float('ocu_invalidez');
            $table->float('ocu_medicos'); 

            $table->float('danos');
            $table->float('materiales');
            $table->float('legal');
            $table->float('limites');
            $table->float('funerarios');
            $table->float('grua');
            $table->float('indem');//indemnizacion
            $table->float('extra');//extraterritorial

            $table->float('valor');//en pesos o dollar
            $table->string('descripcion')->unique();//nombre del plan

            $table->tinyInteger('estado');
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
        Schema::dropIfExists('plans');
    }
};
