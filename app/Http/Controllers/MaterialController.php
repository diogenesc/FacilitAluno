<?php

namespace App\Http\Controllers;

use App\Models\Arquivo;
use App\Models\Material;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\MaterialRequest;
use Exception;
use Illuminate\Support\Facades\Storage;

class MaterialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $materiais = Auth::user()->materiais;

        return view('material.index', ['materiais' => $materiais]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('material.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MaterialRequest $request)
    {
        $path = $request->file('arquivo')->store('arquivos');
        try {
            $arquivo = new Arquivo();
            $arquivo->path = $path;
            $arquivo->save();

            $material = new Material();
            $material->nome = $request->nome;
            $material->arquivo()->associate($arquivo);
            $material->usuario()->associate(Auth::user());

            $material->save();
        } catch(\Exception $e) {
            Storage::delete($path);
            $arquivo->delete();
        }

        return redirect()->route('material.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Material  $material
     * @return \Illuminate\Http\Response
     */
    public function show(Material $material)
    {
        return view('material.show', ['material' => $material]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Material  $material
     * @return \Illuminate\Http\Response
     */
    public function edit(Material $material)
    {
        return view('material.edit', ['material' => $material]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Material  $material
     * @return \Illuminate\Http\Response
     */
    public function update(MaterialRequest $request, Material $material)
    {
        $material->nome = $request->nome;

        Storage::delete($material->arquivo->path);
        $path = $request->file('arquivo')->store('arquivos');
        $material->arquivo->path = $path;

        $material->arquivo->save();
        $material->save();

        return redirect()->route('material.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Material  $material
     * @return \Illuminate\Http\Response
     */
    public function destroy(Material $material)
    {
        $arquivo = $material->arquivo;
        Storage::delete($arquivo->path);
        $material->delete();
        Arquivo::find($arquivo->id)->delete();

        return redirect()->route('material.index');
    }

    public function download(Material $material)
    {
        return Storage::download($material->arquivo->path);
    }
}
