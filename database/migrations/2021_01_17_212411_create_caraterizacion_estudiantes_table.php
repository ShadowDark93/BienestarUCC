<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCaraterizacionEstudiantesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('caraterizacion_estudiantes', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->id();
            $table->foreignId('user_id')->constrained('users');
            $table->string('nombreAcudiente');
            $table->string('telefonoAcudiente', '10');
            $table->string('correoAcudiente');
            $table->string('padreNombre');
            $table->string('padreTelefono');
            $table->string('padreCorreo');
            $table->string('madreNombre');
            $table->string('madreTelefono');
            $table->string('madreCorreo');
            $table->char('estrato','1');
            $table->boolean('pc');
            $table->boolean('internet');
            $table->boolean('habeas_data')
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
        Schema::dropIfExists('caraterizacion_estudiantes');
    }
}
