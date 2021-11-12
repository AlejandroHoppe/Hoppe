<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDomiciliosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('domicilios', function (Blueprint $table) {
            $table->id();

            $table->string("calle");
            $table->tinyInteger("numeroPortal",4);
            $table->tinyInteger("numeroPiso",2);
            $table->tinyText("letraPiso",1);
            $table->tinyInteger("codigoPostal", 8)

            //En un mismo domicilio podrán residir múltiples personas

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
        Schema::dropIfExists('domicilios');
    }
}
