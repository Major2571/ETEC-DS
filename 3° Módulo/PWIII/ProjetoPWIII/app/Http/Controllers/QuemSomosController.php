<?php

namespace App\Http\Controllers;

use App\Models\QuemSomos;
use Illuminate\Http\Request;

class QuemSomosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $quemSomos = QuemSomos::all();
        return view('quemSomos', compact('quemSomos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $quemSomos = QuemSomos::all();
        return view('user.quemSomosCad', compact('quemSomos'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $quemSomos = new QuemSomos();

        $quemSomos -> nome = $request -> txNome;
        $quemSomos -> sobrenome = $request -> txSobrenome;

        $quemSomos->save();
        
        return redirect()->route('quemSomosCad');
    }

    /**
     * Display the specified resource.
     */
    public function show(QuemSomos $quemSomos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(QuemSomos $quemSomos, $id)
    {
        $quemSomos = QuemSomos::FindOrFail($id);
        return view('user.update.updateDev', compact('quemSomos'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $quemSomos = QuemSomos::FindOrFail($id);

        $quemSomos->nome = $request->input('txNome');
        $quemSomos->sobrenome = $request->input('txSobrenome');

        $quemSomos->save();
        
        return redirect()->route('quemSomosCad');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($idQuemSomos)
    {
        $quemSomos = new QuemSomos();
        $quemSomos->where('id', $idQuemSomos)->delete();
        return redirect()->route('quemSomosCad');
    }
}
