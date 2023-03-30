<?php

namespace App\Http\Controllers;

use App\Models\Adidas;
use App\Models\NewBalance;
use App\Models\Nike;
use App\Models\User;
use App\Models\Vans;
use Illuminate\Http\Request;

class EditController extends Controller
{
    public function editAnything($id, $company)
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

        return view('edit', compact('item', 'company'));
    }


    public function edit_user($id)
    {
        $userr = User::find($id);
        return view('edit_users', compact('userr'));
    }

    // public function edit_profile($id)
    // {
    //     $profile = User::find($id);
    //     return view('user_profile', compact('profile'));
    // }
}
