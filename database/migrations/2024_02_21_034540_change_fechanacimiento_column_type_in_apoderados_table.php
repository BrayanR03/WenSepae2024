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
        Schema::table('apoderados', function (Blueprint $table) {
            $table->date('ApoderadoFechaNacimiento')->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('apoderados', function (Blueprint $table) {
            $table->string('ApoderadoFechaNacimiento')->change();
        });
    }
};
