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
        Schema::create('docentes', function (Blueprint $table) {
            $table->bigIncrements('DocenteID');
            $table->string('DocenteApellidos',50);
            $table->string('DocenteNombres',50);
            $table->string('DocenteDni',8);
            $table->string('DocenteFechaNacimiento');
            $table->string('DocenteTelefono',9);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('docentes');
    }
};
