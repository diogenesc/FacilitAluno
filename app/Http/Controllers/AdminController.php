<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $admins = Usuario::where('flag_admin', 1)->get();

        return view('', [
            'admins' => $admins
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('');
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
     * @param  Usuario  $admin
     * @return \Illuminate\Http\Response
     */
    public function show(Usuario $admin)
    {
        return view('', [
            'admin' => $admin
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Usuario  $admin
     * @return \Illuminate\Http\Response
     */
    public function edit(Usuario $admin)
    {
        return view('', [
            'admin' => $admin
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  Usuario  $admin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Usuario $admin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Usuario  $admin
     * @return \Illuminate\Http\Response
     */
    public function destroy(Usuario $admin)
    {
        //
    }
}
