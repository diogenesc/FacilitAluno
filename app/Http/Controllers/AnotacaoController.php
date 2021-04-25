<?php

namespace App\Http\Controllers;

use App\Models\Anotacao;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\AnotacaoRequest;

class AnotacaoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $anotacoes = Anotacao::all();

        return view('anotacao.index', ['anotacoes' => $anotacoes]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('anotacoes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AnotacaoRequest $request)
    {
        $request->validated();

        Auth::user()->anotacoes()->create([
            'titulo' => $request->titulo,
            'conteudo' => $request->conteudo,
            'cor' => $request->cor
        ]);

        return redirect()->route('anotacao.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Anotacao  $anotacao
     * @return \Illuminate\Http\Response
     */
    public function show(Anotacao $anotacao)
    {
        return view('anotacao.show', ['anotacao' => $anotacao]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Anotacao  $anotacao
     * @return \Illuminate\Http\Response
     */
    public function edit(Anotacao $anotacao)
    {
        return view('anotacao.edit', ['anotacao' => $anotacao]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Anotacao  $anotacao
     * @return \Illuminate\Http\Response
     */
    public function update(AnotacaoRequest $request, Anotacao $anotacao)
    {
        $request->validated();

        $anotacao->titulo = $request->titulo;
        $anotacao->conteudo =  $request->conteudo;
        $anotacao->cor =  $request->cor;

        $anotacao->save();

        return redirect()->route('anotacao.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Anotacao  $anotacao
     * @return \Illuminate\Http\Response
     */
    public function destroy(Anotacao $anotacao)
    {
        $anotacao->delete();

        return redirect()->route('anotacao.index');
    }
}
