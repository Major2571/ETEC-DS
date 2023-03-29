<?php

namespace App\Http\Controllers;

use App\Models\Reclamacoes;
use Illuminate\Http\Request;

class ReclamacoesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $reclamacoes = Reclamacoes::all();
        return view('reclamacoes', compact('reclamacoes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Reclamacoes $reclamacoes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Reclamacoes $reclamacoes)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Reclamacoes $reclamacoes)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Reclamacoes $reclamacoes)
    {
        //
    }
}
