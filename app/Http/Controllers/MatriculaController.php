<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Matricula;
use App\Models\Curso;
use App\Models\DetalleMatricula;
use App\Http\Requests\CreateMatriculaRequest;
use Illuminate\Support\Facades\DB;
class MatriculaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $matriculas=Matricula::get();
        return view('matriculas.matriculas',compact('matriculas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $cursos=Curso::get();
        return view('matriculas.matriculascreate',[
            'matriculas'=>new Matricula
        ],compact('cursos'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateMatriculaRequest $request)
    {
        $alumnoID=$request->input('AlumnoID');

        $existenciaAlumno=Matricula::where('AlumnoID',$alumnoID)->exists();
        if($existenciaAlumno){
            //echo '<script>alert("Este Alumno ya Tiene una Matrícula Vigente!!");</script>';
            return back()->with('mensaje','Este Alumno ya tiene una Matrícula Vigente');
        }else{
            $matriculas=new Matricula($request->validated());
            $cursoidd=explode(',',$request->ids_cursos);
            $matriculas->save();
            $idMatriculaUltima=Matricula::max('MatriculaID');
            foreach($cursoidd as $cursoID){
                DB::insert("INSERT INTO detallematriculas(MatriculaID,CursoID)VALUES($idMatriculaUltima,$cursoID)");
                /*DetalleMatricula::create([
                    'MatriculaID'=>$idMatriculaUltima,
                    'CursoID'=>intval($cursoID)
                ]);*/
            }
            return redirect()->route('matriculas.index');
        }
        
        
    }

    /**
     * Display the specified resource.
     */
    public function show($MatriculaID)
    {
        return view('matriculas.matriculasshow',[
            'matriculas'=>Matricula::find($MatriculaID)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Matricula $matricula)
    {
        return view('matriculas.matriculasedit',[
            'matriculas'=>$matricula
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CreateMatriculaRequest $request, Matricula $matricula)
    {
        if ($request->hasFile('matricula')) {
            Storage::delete($matricula->image);
            $matricula->fill($request->validated());
            $matricula->image=$request->file('image')->store('images');
            $matricula->save();
        } else {
            
            $matricula->update(array_filter($request->validated()));
        }

        return redirect()->route('matriculas.show',$matricula);
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Matricula $matricula)
    {
        $matricula->delete();
        return redirect()->route('matriculas.index');
    }
}
