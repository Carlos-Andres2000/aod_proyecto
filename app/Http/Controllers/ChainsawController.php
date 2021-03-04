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
        return view ('chainsaws.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Chainsaw  $chainsaw
     * @return \Illuminate\Http\Response
     */
    public function show(Chainsaw $Chainsaw)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Chainsaw  $chainsaw
     * @return \Illuminate\Http\Response
     */
    public function edit(Chainsaw $Chainsaw)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Chainsaw  $chainsaw
     * @return \Illuminate\Http\Response
     */
    public function destroy(Chainsaw $Chainsaw)
    {
        //
    }
}
