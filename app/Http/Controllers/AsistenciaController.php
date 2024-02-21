<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Asistencia;
use App\Models\Curso;
use App\Models\DetalleMatricula;
use App\Http\Requests\CreateAsistenciaRequest;
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
        $asistencias=new Asistencia($request->validated());
        $asistencias->save();
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
        $cursos=Curso::find($CursoID);
        return view('asistencia-alumnos',compact('cursos'));
    }
    public function registrarasistencia($CursoID)
    {
        $alumnosregistrados = DetalleMatricula::where('CursoID', $CursoID)->get();   
        return view('registrar-asistencia');
    }

}
