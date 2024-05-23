<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AdminController extends Controller
{
    //Manage Users
    public function users()
    {
        if(Auth::user()->is_role == 2)
        {
            $data['getRecord'] = User::find(Auth::user()->id);
            return view('admin/manage/users', $data);
        }
    }

    //Online Registration
    public function choices()
    {
        if(Auth::user()->is_role == 2)
        {
            $data['getRecord'] = User::find(Auth::user()->id);
            return view('admin/onlineregistration/choices', $data);
        }
    }

    //Online Registration >> Scholar Allowance Registration
    public function validatescholar()
    {
        if(Auth::user()->is_role == 2)
        {
            $data['getRecord'] = User::find(Auth::user()->id);
            return view('admin/onlineregistration/selection/allowanceregistration/validatescholar', $data);
        }
    }

    public function scholarsubmission()
    {
        if(Auth::user()->is_role == 2)
        {
            $data['getRecord'] = User::find(Auth::user()->id);
            return view('admin/onlineregistration/selection/allowanceregistration/submission/scholarsubmission', $data);
        }
    }

    //Online Registration >> Scholar Applicant Registration
    public function validateapplicant()
    {
        if(Auth::user()->is_role == 2)
        {
            $data['getRecord'] = User::find(Auth::user()->id);
            return view('admin/onlineregistration/selection/scholarregistration/validateapplicant', $data);
        }
    }

    public function applicantsubmission()
    {
        if(Auth::user()->is_role == 2)
        {
            $data['getRecord'] = User::find(Auth::user()->id);
            return view('admin/onlineregistration/selection/scholarregistration/submission/applicantsubmission', $data);
        }
    }

    //Documents
    public function documents()
    {
        if(Auth::user()->is_role == 2)
        {
            $data['getRecord'] = User::find(Auth::user()->id);
            return view('admin/repository/documents', $data);
        }
    }
}