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
        Schema::create('usuarios', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');            
            $table->string('apellido');        
            $table->string('usuario')->unique();
            $table->string('contrasena');//agregar numero de campos debe estar hashada
            
            $table->unsignedBigInteger('id_rol');
            $table->foreign('id_rol')
                ->references('id')
                ->on('rols')
                ->onDelete('cascade')
                ->onUpdate('cascade');

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
        Schema::dropIfExists('usuarios');
    }
};
