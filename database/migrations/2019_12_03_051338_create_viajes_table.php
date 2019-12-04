<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateViajesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('viajes', function (Blueprint $table) {
            $table->bigIncrements('idViaje');
            $table->string('nombreViaje', 35);
            $table->double('costoViaje', 5,2);
            $table->longText('descriptionViaje');
            $table->longText('lugaresVisita');
            $table->unsignedInteger('guia_id'); // Relación con guias
            $table->unsignedInteger('descuento_id'); // Relación con descuento
            //$table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('viajes');
    }
}
