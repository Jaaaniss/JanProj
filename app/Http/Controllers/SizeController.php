<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Symfony\Component\Console\Output\ConsoleOutput;

class SizeController extends Controller
{
    public function savesize(Request $request)
    {
        
        // $out = new ConsoleOutput();
        
        // $data = (object)$request->all();
        // $out->writeln($data->size);

        // $user = optional(Auth::user())->id;
        // $user = Auth::user()->id;
        // $out->writeln($user);
        // return dd($request->size);

    }
        
        // $foot_size = $request->input('sizeinput');
        // $data=array('sizeinput'=>$foot_size);
        // DB::table('users')->savesize($data);
        // echo "Record inserted successfully.<br/>";
        // echo '<a href = "/insert">Click Here</a> to go back.';


        public function insert(Request $request){
            $size = $request->foot_size_cm;
            $data=array('foot_size_cm'=>$size);
            DB::table('users')->where("id",Auth::user()->id)->update($data);
            return back();
    }
}

