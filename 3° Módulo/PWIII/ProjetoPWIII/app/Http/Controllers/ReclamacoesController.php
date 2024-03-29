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
    public function index(Request $request)
    {
        // $reclamacoes = Reclamacoes::all();
        $lab = Laboratorio::all();

        $reclamacoes = Reclamacoes::with('laboratorio')->get();

        // Filtros
        $filtroLab = $request->input('filtroLab');
        if ($filtroLab) {
            $reclamacoes = $reclamacoes->where('idLab', $filtroLab);
        }
        return view('user.reclamacoesTabela', compact(
            'reclamacoes',
            'lab',
            'filtroLab'
        ));
    }

    public function recAll()
    {
        $reclamacoes = Reclamacoes::all();
        return $reclamacoes;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $reclamacoes = Reclamacoes::all();
        $lab = Laboratorio::all();

        return view('reclamacoes', compact('reclamacoes', 'lab'));
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

        return redirect('/mande-uma-reclamacao');
    }
    public function addRecApi(Request $request)
    {
        $reclamacoes = new Reclamacoes();

        $reclamacoes->idLab = $request->txLab;
        $reclamacoes->pc = $request->txPc;
        $reclamacoes->titulo = $request->txTitulo;
        $reclamacoes->descricao = $request->txDescricao;

        $reclamacoes->save();

        return $reclamacoes;
    }

    /**
     * Display the specified resource.
     */
    public function show(Reclamacoes $reclamacoes)
    {
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Reclamacoes $reclamacoes, $id)
    {
        $reclamacoes = Reclamacoes::FindOrFail($id);
        $lab = Laboratorio::all();

        // dd($reclamacoes);

        return view('user.update.updateRec', compact('reclamacoes', 'lab'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $reclamacoes = Reclamacoes::FindOrFail($id);

        // $reclamacoes->idLab = $request->input('txLab');
        // $reclamacoes->pc = $request->input('txPc');
        // $reclamacoes->titulo = $request->input('txTitulo');
        // $reclamacoes->descricao = $request->input('txDescricao');
        // $reclamacoes->dtCriacao = $request->input('txdtCriacao');

        $reclamacoes->status = $request->input('status');

        $reclamacoes->save();

        return redirect()->route('reclamacoes');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($idRec)
    {
        $reclamacoes = new Reclamacoes();
        $reclamacoes->where('id', $idRec)->delete();
        return redirect()->route('reclamacoes');
    }

    // public function allReclamacoes()
    // {
    //     $reclamacoes = Reclamacoes::all();
    //     return $reclamacoes;
    // }
}
