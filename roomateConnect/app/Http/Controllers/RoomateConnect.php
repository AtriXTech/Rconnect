<?php

namespace App\Http\Controllers;

use App\Models\roommate_profile;
use App\Models\User;
use Illuminate\Http\Request;

class RoomateConnect extends Controller
{
    public function studentOnboardingSuccess(){
        return view('student.studentOnboardingSuccess');
    }

    public function agentOnboardingSuccess(){
        return view('agent.agentOnboardingSuccess');
    }
   
    public function agentDashboard(){
        return view('agent.agentDashboard');
    }
   
    public function agentLeads(){
        return view('agent.leads');
    }

    public function discover(){
        return view('student.discover');
    }
    public function hostels(){
        return view('student.hostel');
    }
    public function roomies(){
        $students=roommate_profile::all();
        return view('student.roomies',compact('students'));
    }
}
