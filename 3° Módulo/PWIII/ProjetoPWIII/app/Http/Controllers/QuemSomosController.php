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
    public function show(QuemSomos $quemSomos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(QuemSomos $quemSomos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, QuemSomos $quemSomos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(QuemSomos $quemSomos)
    {
        //
    }
}
