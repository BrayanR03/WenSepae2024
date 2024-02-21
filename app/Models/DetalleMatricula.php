<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetalleMatricula extends Model
{
    use HasFactory;
    protected $table='detallematriculas';
    protected $primaryKey=['MatriculaID','CursoID'];
    protected $guarded=[];
}
