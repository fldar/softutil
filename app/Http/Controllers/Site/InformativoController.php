<?php

namespace App\Http\Controllers\Site;

use App\Informativo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class InformativoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }


    public function salvar(Request $req)
    {
      $dados = $req->all();
      Informativo::create($dados);
      return redirect()->route('site.home');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
     * @param  \App\Informativo  $informativo
     * @return \Illuminate\Http\Response
     */
    public function show(Informativo $informativo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Informativo  $informativo
     * @return \Illuminate\Http\Response
     */
    public function edit(Informativo $informativo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Informativo  $informativo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Informativo $informativo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Informativo  $informativo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Informativo $informativo)
    {
        //
    }
}
