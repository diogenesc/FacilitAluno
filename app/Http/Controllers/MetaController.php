<?php

namespace App\Http\Controllers;

use App\Models\Meta;
use Illuminate\Http\Request;
use App\Http\Requests\MetaRequest;
use Illuminate\Support\Facades\Auth;

class MetaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $metas = Auth::user()->metas;

        return view('meta.index', ['metas' => $metas]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('meta.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MetaRequest $request)
    {
        Auth::user()->metas()->create([
            'nome' => $request->nome,
            'prioridade' => $request->prioridade
        ]);

        return redirect()->route('meta.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Meta  $meta
     * @return \Illuminate\Http\Response
     */
    public function show(Meta $meta)
    {
        return view('meta.show', ['meta' => $meta]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Meta  $meta
     * @return \Illuminate\Http\Response
     */
    public function edit(Meta $meta)
    {
        return view('meta.edit', ['meta' => $meta]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Meta  $meta
     * @return \Illuminate\Http\Response
     */
    public function update(MetaRequest $request, Meta $meta)
    {
        $meta->nome = $request->nome;
        $meta->prioridade =  $request->prioridade;

        $meta->save();

        return redirect()->route('meta.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Meta  $meta
     * @return \Illuminate\Http\Response
     */
    public function destroy(Meta $meta)
    {
        $meta->delete();

        return redirect()->route('meta.index');
    }
}
