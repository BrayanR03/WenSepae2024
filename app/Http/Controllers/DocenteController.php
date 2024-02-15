<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Docente;
use App\Http\Requests\CreateDocenteRequest;
class DocenteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $docentes=Docente::get();
        return view('docentes',compact('docentes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('docentecreate',[
            'docentes'=>new Docente
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateDocenteRequest $request)
    {
        $docentes=new Docente($request->validated());
        $docentes->save();
        return redirect()->route('docentes.index');
    }

    /**
     * Display the specified resource.
     */
    public function show($DocenteID)
    {
        return view('docentesshow',[
            'docentes'=>Docente::find($DocenteID)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Docente $docente)
    {
        return view('docenteedit',[
            'docentes'=>$docente
        ]);
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CreateDocenteRequest $request, Docente $docente)
    {
        if ($request->hasFile('image')) {
            Storage::delete($docente->image);
            $docente->fill($request->validated());
            $docente->image=$request('image')->storage('images');
            $docente->save();
        } else {
            $docente->update(array_filter($request->validated()));
        }
        return redirect()->route('docentes.show',$docente);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Docente $docente)
    {
        $docente->delete();
        return redirect()->route('docentes.index');
    }
}
