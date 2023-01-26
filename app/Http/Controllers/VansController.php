<?php

namespace App\Http\Controllers;

use App\Models\Vans;
use Illuminate\Http\Request;

class VansController extends Controller
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

    public function vans()
    {
        $vans = Vans::all();
        return view('next',['vans'=>$vans]);
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
     * @param  \App\Models\Vans  $vans
     * @return \Illuminate\Http\Response
     */
    public function show(Vans $vans)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Vans  $vans
     * @return \Illuminate\Http\Response
     */
    public function edit(Vans $vans)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Vans  $vans
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Vans $vans)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Vans  $vans
     * @return \Illuminate\Http\Response
     */
    public function destroy(Vans $vans)
    {
        //
    }
}
