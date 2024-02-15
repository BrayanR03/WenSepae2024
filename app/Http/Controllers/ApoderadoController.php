<?php

namespace App\Http\Controllers;
use App\Models\Apoderado;
use Illuminate\Http\Request;
use App\Http\Requests\CreateApoderadoRequest;
class ApoderadoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $apoderados=Apoderado::get();
        return view('apoderados',compact('apoderados'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('apoderadocreate',[
            'apoderados'=>new Apoderado
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateApoderadoRequest $request)
    {
        $apoderados=new Apoderado($request->validated());
        $apoderados->save();
        return redirect()->route('apoderados.index');
    }

    /**
     * Display the specified resource.
     */
    public function show($ApoderadoID)
    {
        return view('apoderadoshow',[
            'apoderados'=>Apoderado::find($ApoderadoID)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Apoderado $apoderado)
    {
        return view('apoderadoedit',[
            'apoderados'=>$apoderado
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Apoderado $apoderado,CreateApoderadoRequest $request)
    {
        if ($request->hasFile('image')) {
            Storage::delete($apoderado->image);
            $apoderado->fill($request->validated());
            $apoderado->image=$request->file('image')->store('images');
            $apoderado->save();
          } else {
            
          $apoderado->update(array_filter($request->validated()));
          }
          
          return redirect()->route('apoderados.show',$apoderado);
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Apoderado $apoderado)
    {
        $apoderado->delete();
        return redirect()->route('apoderados.index');   
    }
}
