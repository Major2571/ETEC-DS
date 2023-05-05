<?php

namespace App\Http\Controllers;

use App\Models\Laboratorio;
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
        $lab = Laboratorio::all();

        return view('reclamacoes', compact('reclamacoes', 'lab'));
    }

    // Slect Count
    public static function totalDeReclamacoes()
    {
        $reclamacoes = new Reclamacoes();
        $total = $reclamacoes::all()->count();
        return $total;
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
        $reclamacoes = new Reclamacoes();

        $reclamacoes->idLab = $request->txLab;
        $reclamacoes->pc = $request->txPc;
        $reclamacoes->titulo = $request->txTitulo;
        $reclamacoes->descricao = $request->txDescricao;

        $reclamacoes->save();

        return redirect('/reclamacoes');
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
    public function destroy($idRec)
    {
        $reclamacoes = new Reclamacoes();
        $reclamacoes->where('id', $idRec)->delete();
        return redirect('/reclamacoes');
    }

    public function allReclamacoes()
    {
        $reclamacoes = Reclamacoes::all();
        return $reclamacoes;
    }

}