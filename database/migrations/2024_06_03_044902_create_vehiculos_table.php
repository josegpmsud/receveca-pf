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
        Schema::create('vehiculos', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('id_cliente');
            $table->foreign('id_cliente')
                ->references('id')
                ->on('clientes')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            
            $table->unsignedBigInteger('id_marca');
            $table->foreign('id_marca')
                ->references('id')
                ->on('marcas')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->unsignedBigInteger('id_clase');
            $table->foreign('id_clase')
                ->references('id')
                ->on('clases')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            
            $table->string('modelo');

            $table->unsignedBigInteger('id_color');
            $table->foreign('id_color')
                ->references('id')
                ->on('colors')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->unsignedBigInteger('id_tipo');
            $table->foreign('id_tipo')
                ->references('id')
                ->on('tipos')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->unsignedBigInteger('id_uso');
            $table->foreign('id_uso')
                ->references('id')
                ->on('usos')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->string('placa')->unique();
            $table->integer('ano');//solo 4 digitos
            $table->string('peso');
            $table->string('serial_motor');
            $table->integer('puestos');
            $table->string('serial_niv');            

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
        Schema::dropIfExists('vehiculos');
    }
};
