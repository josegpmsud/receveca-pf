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
        Schema::create('contratos', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('id_usuario');
            $table->foreign('id_usuario')
                ->references('id')
                ->on('usuarios')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->unsignedBigInteger('id_vehiculo');
            $table->foreign('id_vehiculo')
                ->references('id')
                ->on('vehiculos')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->unsignedBigInteger('id_plan');
            $table->foreign('id_plan')
                ->references('id')
                ->on('plans')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->date('fecha_ini');
            $table->date('fecha_fin');

            $table->integer('codigo')->unique();        
            $table->float('cobertura');
            $table->float('pago');
            
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
        Schema::dropIfExists('contratos');
    }
};
