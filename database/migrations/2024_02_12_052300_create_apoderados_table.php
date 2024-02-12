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
        Schema::create('apoderados', function (Blueprint $table) {
            $table->bigIncrements('ApoderadoID');
            $table->string('ApoderadoApellidos',50);
            $table->string('ApoderadoNombres',50);
            $table->string('ApoderadoDni',8);
            $table->string('ApoderadoFechaNacimiento');
            $table->string('ApoderadoParentesco',50);
            $table->string('ApoderadoDireccion',50);
            $table->string('ApoderadoCiudad',50);
            $table->string('ApoderadoTelefono',9);
            $table->string('ApoderadoEmail',50);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('apoderados');
    }
};
