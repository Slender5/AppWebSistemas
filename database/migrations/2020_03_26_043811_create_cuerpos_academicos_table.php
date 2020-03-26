<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCuerposAcademicosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cuerpos_academicos', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->text('nombre');
            $table->text('grado');
            $table->text('idCA');
            $table->text('clave');
            $table->text('integrantes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cuerpos_academicos');
    }
}
