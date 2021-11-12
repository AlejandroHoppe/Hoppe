<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personas', function (Blueprint $table) {
            $table->id();
           
            $table->string('nombre',150);
            $table->string("primerApellido", 150);
            $table->string("segundoApellido", 150);
            $table->date("fechaNacimiento");
            $table->string("madreNombre", 300);
            //$table->string("madreApellido", 150);
            $table->string("padreNombre", 300);
            //$table->string("padreApellido", 150);
            $table->string("domicilio", 150);
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
        Schema::dropIfExists('personas');
    }
}
