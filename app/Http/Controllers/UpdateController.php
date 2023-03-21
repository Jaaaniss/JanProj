<?php

namespace App\Http\Controllers;

use App\Models\Adidas;
use App\Models\NewBalance;
use App\Models\Nike;
use App\Models\Vans;
use Illuminate\Http\Request;

class UpdateController extends Controller
{

    public function updatee_vans(Request $request, $id)
    {
        $vans = Vans::find($id);
        $vans->v_cm = $request->input('CM');
        $vans->v_eu = $request->input('EU');
        $vans->v_uk = $request->input('UK');
        $vans->v_usm = $request->input('US_M');
        $vans->v_usw = $request->input('US_W');
        $vans->update();
        return redirect('manage_vans')->with('status','Sizes Updated Successfully');
    }

    // public function updatee_nike(Request $request, $id)
    // {

    //     $nike = Nike::find($id);
    //     $nike->n_cm = $request->input('CM');
    //     $nike->n_eu = $request->input('EU');
    //     $nike->n_uk = $request->input('UK');
    //     $nike->n_usm = $request->input('US_M');
    //     $nike->n_usw = $request->input('US_W');
    //     $nike->update();
    //     return redirect('manage_nike')->with('status','Sizes Updated Successfully');
    // }

    // public function updatee_adidas(Request $request, $id)
    // {
    //     $adidas = Adidas::find($id);
    //     $adidas->a_cm = $request->input('CM');
    //     $adidas->a_eu = $request->input('EU');
    //     $adidas->a_uk = $request->input('UK');
    //     $adidas->a_usm = $request->input('US_M');
    //     $adidas->a_usw = $request->input('US_W');
    //     $adidas->update();
    //     return redirect('manage_adidas')->with('status','Sizes Updated Successfully');
    // }

    // public function updatee_newbalance(Request $request, $id)
    // {
    //     $newbalance = NewBalance::find($id);
    //     $newbalance->nb_cm = $request->input('CM');
    //     $newbalance->nb_eu = $request->input('EU');
    //     $newbalance->nb_uk = $request->input('UK');
    //     $newbalance->nb_usm = $request->input('US_M');
    //     $newbalance->nb_usw = $request->input('US_W');
    //     $newbalance->update();
    //     return redirect('manage_nb')->with('status','Sizes Updated Successfully');
    // }
}
