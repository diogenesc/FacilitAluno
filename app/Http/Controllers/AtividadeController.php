<?php

namespace App\Http\Controllers;

use App\Models\Atividade;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\AtividadeRequest;

class AtividadeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $atividades = Auth::user()->atividades;

        return view('atividade.index', ['atividades' => $atividades]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('atividade.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AtividadeRequest $request)
    {
        Auth::user()->atividades()->create([
            'titulo' => $request->titulo,
            'descricao' => $request->descricao,
            'prioridade' => $request->prioridade,
            'marcador' => $request->marcador,
            'cor' => $request->cor,
            'data_inicio' => $request->data_inicio,
            'data_fim' => $request->data_fim,
            'alarme' => $request->alarme
        ]);

        return redirect()->route('atividade.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Atividade  $atividade
     * @return \Illuminate\Http\Response
     */
    public function show(Atividade $atividade)
    {
        return view('atividade.show', ['atividade' => $atividade]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Atividade  $atividade
     * @return \Illuminate\Http\Response
     */
    public function edit(Atividade $atividade)
    {
        return view('atividade.edit', ['atividade' => $atividade]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Atividade  $atividade
     * @return \Illuminate\Http\Response
     */
    public function update(AtividadeRequest $request, Atividade $atividade)
    {
        $atividade->titulo = $request->titulo;
        $atividade->descricao =  $request->descricao;
        $atividade->prioridade =  $request->prioridade;
        $atividade->marcador =  $request->marcador;
        $atividade->cor =  $request->cor;
        $atividade->data_inicio =  $request->data_inicio;
        $atividade->data_fim =  $request->data_fim;
        $atividade->alarme =  $request->alarme;

        $atividade->save();

        return redirect()->route('atividade.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Atividade  $atividade
     * @return \Illuminate\Http\Response
     */
    public function destroy(Atividade $atividade)
    {
        $atividade->delete();

        return redirect()->route('atividade.index');
    }
}
