<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Matricula;
use App\Http\Requests\CreateMatriculaRequest;
class MatriculaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $matriculas=Matricula::get();
        return view('matriculas',compact('matriculas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('matriculascreate',[
            'matriculas'=>new Matricula
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateMatriculaRequest $request)
    {
        $matriculas=new Matricula($request->validated());
        $matriculas->save();
        return redirect()->route('matriculas.index');
    }

    /**
     * Display the specified resource.
     */
    public function show($MatriculaID)
    {
        return view('matriculasshow',[
            'matriculas'=>Matricula::find($MatriculaID)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Matricula $matricula)
    {
        return view('matriculasedit',[
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
            $matricula->image=$request('image')->storage('images');
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
