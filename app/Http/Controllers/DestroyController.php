<?php

namespace App\Http\Controllers;

use App\Models\Adidas;
use App\Models\NewBalance;
use App\Models\Nike;
use App\Models\Vans;
use Illuminate\Http\Request;

class DestroyController extends Controller
{
    public function destroy_vans($id)
    {
        $vans = Vans::find($id);
        $vans->delete();
        return redirect('manage_vans')->with('status','Size Deleted Successfully');
    }

    // public function destroy_nike($id)
    // {
    //     $nike = Nike::find($id);
    //     $nike->delete();
    //     return redirect('manage_nike')->with('status','Size Deleted Successfully');
    // }

    // public function destroy_adidas($id)
    // {
    //     $adidas = Adidas::find($id);
    //     $adidas->delete();
    //     return redirect('manage_adidas')->with('status','Size Deleted Successfully');
    // }

    // public function destroy_nb($id)
    // {
    //     $newbalance = NewBalance::find($id);
    //     $newbalance->delete();
    //     return redirect('manage_nb')->with('status','Size Deleted Successfully');
    // }
}
