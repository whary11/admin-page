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
            $table->string('nombre')->nullable();
            $table->string('slogan')->nullable();
            $table->string('telefono1')->nullable();            
            $table->string('telefono2')->nullable();            
            $table->string('telefono3')->nullable();            
            $table->string('facebook')->nullable();            
            $table->string('instagran')->nullable();            
            $table->string('twitter')->nullable();            
            $table->string('linkedin')->nullable();            
            $table->string('derechos')->nullable();            
            $table->string('dirección')->nullable();            
            $table->string('correo1')->nullable();
            $table->string('correo2')->nullable();
            $table->string('logo')->nullable();
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
