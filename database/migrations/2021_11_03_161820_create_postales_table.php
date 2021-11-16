<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('postales', function (Blueprint $table) {
            $table->id();
/*
El código postal hará referencia a un listado de posibles códigos postales, pertenecientes a una localidad.
Cada localidad pertenece a una provincia, y cada provincia pertenece a una comunidad autónoma. 


//ESTO ES UNA PRUEBA
Notas en la agendas
 */
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
        Schema::dropIfExists('postales');
    }
}
