<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmpresasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empresas', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('telfijo')->nullable();
            $table->string('celular1')->nullable();
            $table->string('celular2')->nullable();            
            $table->string('celular3')->nullable();            
            $table->string('correo1')->nullable();            
            $table->string('correo2')->nullable();            
            $table->string('correo3')->nullable();            
            $table->string('direccion')->nullable();            
            $table->string('horario')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('empresas');
    }
}
