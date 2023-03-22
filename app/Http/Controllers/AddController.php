<?php

namespace App\Http\Controllers;

use App\Models\Adidas;
use App\Models\NewBalance;
use App\Models\Nike;
use App\Models\Vans;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use League\CommonMark\Node\Inline\Newline;

class AddController extends Controller
{
    public function create()
    {
        return view('add');
    }


    public function storeAnything(Request $request)
    {
        $item = null;

        switch ($request->company) {
            case 'vans':
                $item = new Vans;
                break;
            case 'adidas':
                $item = new Adidas;
                break;
            case 'nike':
                $item = new Nike;
                break;
            case 'nb':
                $item = new NewBalance;
                break;
        }

        $item->cm = $request->input('CM');
        $item->eu = $request->input('EU');
        $item->uk = $request->input('UK');
        $item->usm = $request->input('US_M');
        $item->usw = $request->input('US_W');
        $item->save();
        return redirect("manage_$request->company")->with('status','Size Added Successfully');
    }


    public function autofill()
    {



        // $vanss = (new Vans)->getTable();
        // return view('add', ['currentTable' => $vanss,]);




        // $users1 = Vans::pluck('name1');
        // $users2 = Nike::pluck('name2');
        // $users3 = Adidas::pluck('name3');
        // $users4 = NewBalance::pluck('name4');
        // return view('add', ['users1' => $users1,'users2' => $users2,'users3' => $users3,'users4' => $users4,]);
    }


}
