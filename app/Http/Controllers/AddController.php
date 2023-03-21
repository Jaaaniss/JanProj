<?php

namespace App\Http\Controllers;

use App\Models\Vans;
use Illuminate\Http\Request;

class AddController extends Controller
{
    public function create()
    {
        return view('add');
    }

    public function store(Request $request)
    {
        $vans = new Vans;
        $vans->v_cm = $request->input('CM');
        $vans->v_eu = $request->input('EU');
        $vans->v_uk = $request->input('UK');
        $vans->v_usm = $request->input('US_M');
        $vans->v_usw = $request->input('US_W');
        $vans->save();
        return redirect('manage')->with('status','Size Added Successfully');
    }
}
