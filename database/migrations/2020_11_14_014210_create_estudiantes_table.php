<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEstudiantesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estudiantes', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8mb4';

            $table->id('carnet');
            $table->integer('identificacion');
            $table->enum('tipo_id', ['RC', 'TI', 'CC', 'PS','CE','P']);
            $table->string('nombre', 50);
            $table->date('nacio')->nullable();
            $table->string('correo', 100)->unique();
            $table->string('telefonos', 50);

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
        Schema::dropIfExists('estudiantes');
    }
}
