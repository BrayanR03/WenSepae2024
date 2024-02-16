<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Curso;
use App\Http\Requests\CreateCursoRequest;
class CursoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cursos=Curso::get();
        return view('cursos.cursos',compact('cursos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('cursos.cursoscreate',[
            'cursos'=>new Curso
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateCursoRequest $request)
    {

        $cursos=new Curso($request->validated());
        $cursos->save();
        return redirect()->route('cursos.index');
                
    }

    /**
     * Display the specified resource.
     */
    public function show($CursoID)
    {
        return view('cursos.cursosshow',[
            'cursos'=>Curso::find($CursoID)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Curso $curso)
    {
        return view('cursos.cursosedit',[
            'cursos'=>$curso
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CreateCursoRequest $request, Curso $curso)
    {
        if ($request->hasFile('image')) {
            Storage::delete($curso->image);
            $curso->fill($request->validated());
            $curso->image==$request('image')->storage('images');
            $curso->save();
        } else {
            
            $curso->update(array_filter($request->validated()));
        }
        return redirect()->route('cursos.show',$curso);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Curso $curso)
    {
        $curso->delete();
        return redirect()->route('cursos.index');
    }
}
