<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\NewBalance;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
class NBController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($size)
    {
        $time = DB::table("newbalance")
            ->where("cm",$size);
        return response()->json(array('data' => $time->get()));
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
     * @param  \App\Models\NewBalance  $newBalance
     * @return \Illuminate\Http\Response
     */
    public function show(NewBalance $newBalance)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\NewBalance  $newBalance
     * @return \Illuminate\Http\Response
     */
    public function edit(NewBalance $newBalance)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\NewBalance  $newBalance
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, NewBalance $newBalance)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\NewBalance  $newBalance
     * @return \Illuminate\Http\Response
     */
    public function destroy(NewBalance $newBalance)
    {
        //
    }
}
