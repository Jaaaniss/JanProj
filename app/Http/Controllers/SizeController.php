<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\Console\Output\ConsoleOutput;

class SizeController extends Controller
{
    public function savesize(Request $request)
    {
        $out = new ConsoleOutput();
        
        $data = (object)$request->all();
        $out->writeln($data->size);
        $user = Auth::user()->name;
        $out->writeln($user);
    }
}
