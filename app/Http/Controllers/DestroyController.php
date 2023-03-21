<?php

namespace App\Http\Controllers;

use App\Models\Vans;
use Illuminate\Http\Request;

class DestroyController extends Controller
{
    public function destroy($id)
    {
        $vans = Vans::find($id);
        $vans->delete();
        return redirect('manage')->with('status','Size Deleted Successfully');
    }
}
