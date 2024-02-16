<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('cursos', function (Blueprint $table) {
            $table->bigIncrements('CursoID');
            $table->string('CursoDescripcion',50);
            $table->date('CursoFechaInicio');
            $table->date('CursoFechaFin');
            $table->string('CursoHoraInicio',5);
            $table->string('CursoHoraFin',5);
            $table->bigInteger('DocenteID');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cursos');
    }
};
