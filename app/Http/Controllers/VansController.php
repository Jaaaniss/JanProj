<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Vans;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Nike;
use App\Models\Adidas;
use App\Models\NewBalance;
use Illuminate\Http\Request;
class VansController extends Controller {
    public function index($size)
    {
        $time = DB::table("vans")
            ->where("v_cm",$size);
        return response()->json(array('data' => $time->get()));
    }
    
    public function vans2(){
        $vans = vans::all();
        $nike = nike::all();
        $adidas = adidas::all();
        $newbalance = newbalance::all();
        return view('select',['vans'=>$vans,'nike'=>$nike,'adidas'=>$adidas, 'newbalance'=>$newbalance]);
    }
    

    public function vans()
    {
        $vans = vans::all();
        $nike = nike::all();
        $adidas = adidas::all();
        $newbalance = newbalance::all();
        return view('next',['vans'=>$vans,'nike'=>$nike,'adidas'=>$adidas, 'newbalance'=>$newbalance]);
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
    public function show($v_cm)
    {
        // $record= DB::table('vans')->where('v_cm', $v_cm);
        // return response()->json(array('v_uk' => $v_uk->get()));


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
