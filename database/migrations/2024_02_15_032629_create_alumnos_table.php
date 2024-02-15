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
        Schema::create('alumnos', function (Blueprint $table) {
            $table->bigIncrements('AlumnoID');
            $table->string('AlumnoApellidos',50);
            $table->string('AlumnoPrimerNombre',50);
            $table->string('AlumnoSegundoNombre',50);
            $table->string('AlumnoFechaNacimiento');
            $table->string('AlumnoDni',8);
            $table->string('AlumnoLugarNacimiento',50);
            $table->string('AlumnoEstadoCivil',1);
            $table->string('AlumnoDireccion',50);
            $table->string('AlumnoSexo',1);
            $table->string('AlumnoTelefono',9);
            $table->string('AlumnoDistrito',20);
            $table->string('AlumnoProvincia',20);
            $table->string('AlumnoDepartamento',20);
            $table->string('AlumnoEmail',25);
            $table->bigInteger('ApoderadoID');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('alumnos');
    }
};
