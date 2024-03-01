<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Asistencia;
use App\Models\Curso;
use App\Models\DetalleMatricula;
use App\Http\Requests\CreateAsistenciaRequest;
use Illuminate\Support\Facades\DB;
class AsistenciaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $asistencias=Asistencia::get();
        return view('asistencias.asistencias',compact('asistencias'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('asistencias.asistenciascreate',[
            'asistencias'=>new Asistencia
        ]);
    }
    
    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateAsistenciaRequest $request)
    {
        
        $matriculaAlumnoID=explode(',',$request->MatriculaID);
        $asistenciasAlumnos=explode(',',$request->asistenciaAlumno);
        if (count($matriculaAlumnoID) === count($asistenciasAlumnos)) {
            // Itera sobre ambos arrays simultáneamente
            foreach ($matriculaAlumnoID as $index => $matricula) {
                $asistencia = $asistenciasAlumnos[$index];
                $asistencias=new Asistencia($request->validated());
                DB::insert("INSERT INTO asistencias(Asistencia,AsistenciaFecha,MatriculaID,CursoID)
                         VALUES (?, ?, ?, ?)", [
                        $asistencia,
                        $asistencias->AsistenciaFecha,
                        $matricula,
                        $asistencias->CursoID
                    ]);
                // Puedes hacer aquí lo que necesites con cada matrícula y asistencia
            }
        } else {
            echo "Los arrays no tienen la misma longitud.";
        }
        /*foreach($matriculaAlumnoID as $matriculaID){
        dd($matriculaID);    
            $asistencias=new Asistencia($request->validated());
            DB::insert("INSERT INTO asistencias(Asistencia,AsistenciaFecha,MatriculaID,CursoID)
                         VALUES (?, ?, ?, ?)", [
                        'A',
                        $asistencias->AsistenciaFecha,
                        $matriculaID,
                        $asistencias->CursoID
                    ]);
        }*/
        return redirect()->route('asistencias.index');
    
    }

    /**
     * Display the specified resource.
     */
    public function show($AsistenciaID)
    {
        return view('asistencias.asistenciasshow',[
            'asistencias'=>Asistencia::find($AsistenciaID)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Asistencia $asistencia)
    {
        return view('asistencias.asistenciasedit',[
            'asistencias'=>$asistencia
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CreateAsistenciaRequest $request, Asistencia $asistencia)
    {
        if ($request->hasFile('image')) {
            Storage::delete($asistencia->image);
            $asistencia->fill($request->validated());
            $asistencia->image=$request->file('image')->store('images');
            $asistencia->save();
        } else {
            
            $asistencia->update(array_filter($request->validated()));
        }
        return redirect()->route('asistencias.show',$asistencia);
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Asistencia $asistencia)
    {
        $asistencia->delete();
        return redirect()->route('asistencias.index');
    }

    public function asistenciaalumnos($CursoID){
        

        $alumnosregistrados=DB::select("CALL AlumnosRegistrado(?)",[$CursoID]);
        return view('asistencias.asistenciascreate',[
            'asistencias'=>new Asistencia
        ],compact('alumnosregistrados'));
        /*$alumnosregistrados = DetalleMatricula::where('CursoID', $CursoID)->get();
        foreach($alumnosregistrados as $alumno){
            dd($alumno->MatriculaID);
        }*/

        #dd($alumnosregistrados);
        #$alumnosjson=$alumnosregistrados->toJson();
        #return $alumnosjson;
        //dd($alumnosjson);
        //$cursos=Curso::find($CursoID);
        /*return view('asistencia-alumnos',compact('alumnosregistrados'));*/
    }
    public function registrarasistencia(Curso $cursos)
    {
        $alumnosregistrados = DetalleMatricula::where('CursoID', $cursos->CursoID)->get();   
        return view('registrar-asistencia');
    }

}
