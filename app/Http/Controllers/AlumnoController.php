<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Alumno;
use App\Http\Requests\CreateAlumnoRequest;
class AlumnoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $alumnos=Alumno::get();
        return view('alumnos.alumnos',compact('alumnos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('alumnos.alumnocreate',[
            'alumnos'=>new Alumno
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateAlumnoRequest $request)
    {
        $alumnos=new Alumno($request->validated());
        $alumnos->save();
        return redirect()->route('alumnos.index');
    }

    /**
     * Display the specified resource.
     */
    public function show($AlumnoID)
    {
        return view('alumnos.alumnoshow',[
            'alumnos'=>Alumno::find($AlumnoID)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Alumno $alumno)
    {
        return view('alumnos.alumnoedit',[
            'alumnos'=>$alumno
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CreateAlumnoRequest $request, Alumno $alumno)
    {
        if ($request->hasFile('image')) {
            Storage::delete($alumno->image);
            $alumno->fill($request->validated());
            $alumno->image=$request->image('image')->store('images');
            $alumno->save();
        } else {
            $alumno->update(array_filter($request->validated()));
        }
        return redirect()->route('alumnos.show',$alumno);
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Alumno $alumno)
    {
        $alumno->delete();
        return redirect()->route('alumnos.index');
    }
}
