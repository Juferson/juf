<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\ScholarApplicantRegistration;

class ApplicantController extends Controller
{
    public function filloutform()
    {
        if(Auth::user()->is_role == 0)
        {
            $data['getRecord'] = User::find(Auth::user()->id);
            return view('applicant/scholarapplicantregistration.filloutform', $data);
        }
    }

    public function scholarapplicantsubmission()
    {
        if(Auth::user()->is_role == 0)
        {
            $data['getRecord'] = User::find(Auth::user()->id);
            return view('applicant/scholarapplicantregistration/submission.scholarapplicantsubmission', $data);
        }
    }
}
