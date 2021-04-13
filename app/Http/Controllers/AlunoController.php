<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;

class AlunoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $alunos = Usuario::where('flag_admin', 0)->get();

        return view('', [
            'alunos' => $alunos
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('auth.register');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  Usuario  $aluno
     * @return \Illuminate\Http\Response
     */
    public function show(Usuario $aluno)
    {
        return view('', [
            'aluno' => $aluno
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Usuario  $aluno
     * @return \Illuminate\Http\Response
     */
    public function edit(Usuario $aluno)
    {
        return view('', [
            'aluno' => $aluno
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  Usuario  $aluno
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Usuario $aluno)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Usuario  $alunod
     * @return \Illuminate\Http\Response
     */
    public function destroy(Usuario $aluno)
    {
        //
    }
}
