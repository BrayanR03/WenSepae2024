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
            $alumno->image=$request->file('image')->store('images');
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

    public function buscarAlumno(Request $request)
{
    $tipo_busqueda = $request->tipo_busqueda;
    $dni_apellidos = $request->dni_apellidos;

    // Lógica de búsqueda según el tipo seleccionado
    if ($tipo_busqueda == 'AlumnoDni') {
        $alumno = Alumno::where('AlumnoDni', $dni_apellidos)->first();
    } else {
        $alumno = Alumno::where('AlumnoApellidos', 'LIKE', "%$dni_apellidos%")->first();
    } 

    if ($alumno) {
        $datosalumno = $alumno->AlumnoApellidos . ', ' . $alumno->AlumnoPrimerNombre;
        $alumnoid = $alumno->AlumnoID;
    } else {
        $datosalumno = '';
        $alumnoid = '';
    }
    if ($alumno) {
        return response()->json([
            'datosalumno' => $alumno->AlumnoApellidos . ', ' . $alumno->AlumnoPrimerNombre,
            'alumnoid' => $alumno->AlumnoID
        ]);
    } else {
        return response()->json(['error' => 'El Alumno No se Encuentra Registrado'], 404);
    }
    
}

}
