<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Nike;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
class NikeController extends Controller {

    public function index($size)
    {
        $time = DB::table("nike")
            ->where("n_cm",$size);
        return response()->json(array('data' => $time->get()));
    }
    
    // public function index1(){
    //     $nike=
    //     return view('next');
    // }
    

    public function nike()
    {

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
     * @param  \App\Models\Vans  $nike
     * @return \Illuminate\Http\Response
     */
    public function show($v_cm)
    {
        // $record= DB::table('nike')->where('v_cm', $v_cm);
        // return response()->json(array('v_uk' => $v_uk->get()));


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Vans  $nike
     * @return \Illuminate\Http\Response
     */
    public function edit(Vans $nike)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Vans  $nike
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Vans $nike)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Vans  $nike
     * @return \Illuminate\Http\Response
     */
    public function destroy(Vans $nike)
    {
        //
    }
}