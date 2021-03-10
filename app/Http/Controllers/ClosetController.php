<?php

namespace App\Http\Controllers;

use App\Models\Closet;
use Illuminate\Http\Request;

class ClosetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $closets = Closet::all();
        return view ('closets.index', compact('closets'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('closets.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $closet = request()->except('_token');
        Closet::insert($closet);
        return redirect ()->to(url('/closets'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Closet  $closet
     * @return \Illuminate\Http\Response
     */
    public function show(Closet $closet)
    {
        return view ('closets.show' , compact('closet'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Closet  $closet
     * @return \Illuminate\Http\Response
     */
    public function edit(Closet $closet)
    {
        return view ('closets.edit' , compact('closet'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Closet  $closet
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Closet $closet)
    {
        $dataCloset = request()->except('_token');
        $closet->update($dataCloset);
        return redirect()->to(url('/closets'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Closet  $closet
     * @return \Illuminate\Http\Response
     */
    public function destroy(Closet $closet)
    {
        $closet->delete();
        return redirect()->to(url('/closets'));
    }
}
