<?php

namespace App\Http\Controllers;

use App\Models\Adidas;
use App\Models\NewBalance;
use App\Models\Nike;
use App\Models\Vans;
use Illuminate\Http\Request;

class EditController extends Controller
{
    public function editt_vans($id)
    {
        $vans = Vans::find($id);
        return view('edit', compact('vans'));
    }

    // public function editt_nike($id)
    // {
    //     $nike = Nike::find($id);
    //     return view('edit', compact('nike'));
    // }

    // public function editt_adidas($id)
    // {
    //     $adidas = Adidas::find($id);
    //     return view('edit', compact('adidas'));
    // }

    // public function editt_newbalance($id)
    // {
    //     $newblance = NewBalance::find($id);
    //     return view('edit', compact('newbalance'));
    // }
}
