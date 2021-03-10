<?php

namespace App\Http\Controllers;

use App\Models\Chainsaw;
use Illuminate\Http\Request;

class ChainsawController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $chainsaws = Chainsaw::all();
        return view ('chainsaws.index', compact('chainsaws'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ("chainsaws.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $chainsaw = request()->except('_token');
        Chainsaw::insert($chainsaw);
        return redirect ()->to(url('/chainsaws'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Chainsaw  $chainsaw
     * @return \Illuminate\Http\Response
     */
    public function show(Chainsaw $Chainsaw)
    {
        return view ('chainsaws.show' , compact('Chainsaw'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Chainsaw  $chainsaw
     * @return \Illuminate\Http\Response
     */
    public function edit(Chainsaw $Chainsaw)
    {
        return view ('chainsaws.edit' , compact('Chainsaw'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Chainsaw  $chainsaw
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Chainsaw $Chainsaw)
    {
        $dataChainsaw = request()->except('_token');
        $Chainsaw->update($dataChainsaw);
        return redirect()->to(url('/chainsaws'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Chainsaw  $chainsaw
     * @return \Illuminate\Http\Response
     */
    public function destroy(Chainsaw $Chainsaw)
    {
        $Chainsaw->delete();
        return redirect()->to(url('/chainsaws'));
    }
}
