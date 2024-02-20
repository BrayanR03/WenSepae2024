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
        Schema::create('detallematriculas', function (Blueprint $table) {
            $table->bigInteger('MatriculaID');
            $table->bigInteger('CursoID');
            $table->decimal('Nota1',9,2)->nullable();
            $table->decimal('Nota2',9,2)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detallematriculas');
    }
};
