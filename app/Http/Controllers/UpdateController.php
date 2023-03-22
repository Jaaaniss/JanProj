<?php

namespace App\Http\Controllers;

use App\Models\Adidas;
use App\Models\NewBalance;
use App\Models\Nike;
use App\Models\Vans;
use Illuminate\Http\Request;

class UpdateController extends Controller
{

    public function updateAnything( $id,$company,Request $request)
    {

        $item = null;

        switch ($company) {
            case 'vans':
                $item = Vans::find($id);
                break;
            case 'adidas':
                $item = Adidas::find($id);
                break;
            case 'nike':
                $item = Nike::find($id);
                break;
            case 'nb':
                $item = NewBalance::find($id);
                break;
        }

        $item->cm = $request->input('CM');
        $item->eu = $request->input('EU');
        $item->uk = $request->input('UK');
        $item->usm = $request->input('US_M');
        $item->usw = $request->input('US_W');
        $item->update();
        return redirect("manage_$company")->with('status','Sizes Updated Successfully');
    }
}
