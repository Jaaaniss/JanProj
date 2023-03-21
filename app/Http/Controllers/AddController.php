<?php

namespace App\Http\Controllers;

use App\Models\Adidas;
use App\Models\NewBalance;
use App\Models\Nike;
use App\Models\Vans;
use Illuminate\Http\Request;

class AddController extends Controller
{
    public function create()
    {
        return view('add');
    }

    public function store_vans(Request $request)
    {
        $vans = new Vans;
        $vans->v_cm = $request->input('CM');
        $vans->v_eu = $request->input('EU');
        $vans->v_uk = $request->input('UK');
        $vans->v_usm = $request->input('US_M');
        $vans->v_usw = $request->input('US_W');
        $vans->save();
        return redirect('manage_vans')->with('status','Size Added Successfully');
    }

    // public function store_nike(Request $request)
    // {
    //     $nike = new Nike;
    //     $nike->n_cm = $request->input('CM');
    //     $nike->n_eu = $request->input('EU');
    //     $nike->n_uk = $request->input('UK');
    //     $nike->n_usm = $request->input('US_M');
    //     $nike->n_usw = $request->input('US_W');
    //     $nike->save();
    //     return redirect('manage_nike')->with('status','Size Added Successfully');
    // }

    // public function store_adidas(Request $request)
    // {
    //     $adidas = new Adidas;
    //     $adidas->a_cm = $request->input('CM');
    //     $adidas->a_eu = $request->input('EU');
    //     $adidas->a_uk = $request->input('UK');
    //     $adidas->a_usm = $request->input('US_M');
    //     $adidas->a_usw = $request->input('US_W');
    //     $adidas->save();
    //     return redirect('manage_adidas')->with('status','Size Added Successfully');
    // }

    // public function store_nb(Request $request)
    // {
    //     $newbalance = new NewBalance;
    //     $newbalance->nb_cm = $request->input('CM');
    //     $newbalance->nb_eu = $request->input('EU');
    //     $newbalance->nb_uk = $request->input('UK');
    //     $newbalance->nb_usm = $request->input('US_M');
    //     $newbalance->nb_usw = $request->input('US_W');
    //     $newbalance->save();
    //     return redirect('manage_nb')->with('status','Size Added Successfully');
    // }
}
