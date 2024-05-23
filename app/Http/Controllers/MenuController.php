<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class MenuController extends Controller
{
    public function menu()
    {
        if(Auth::user()->is_role == 2)
        {
            $data['getRecord'] = User::find(Auth::user()->id);
            return view('admin.menu', $data);
        }
        else if(Auth::user()->is_role == 1)
        {
            $data['getRecord'] = User::find(Auth::user()->id);
            return view('scholar.menu', $data);
        }
        else if(Auth::user()->is_role == 0)
        {
            $data['getRecord'] = User::find(Auth::user()->id);
            return view('applicant.menu', $data);
        }
    }

}