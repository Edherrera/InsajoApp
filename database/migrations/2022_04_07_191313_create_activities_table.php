<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateActivitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('activities', function (Blueprint $table) {
            $table->id();
            $table->string('Nombre');
            $table->string('Descripcion');
            /*$table->string('Estado');*/
            $table->string('Estado');
            $table->dateTime('Fecha_de_creación', $precision = 0);
            $table->dateTime('Fecha_de_entrega', $precision = 0);
            $table->decimal('Nota', $precision = 8, $scale = 2);
            /*$table->string('Comentario');*/
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
        Schema::dropIfExists('activities');
    }
}
