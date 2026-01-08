<?php

namespace App\Http\Controllers;

use App\Models\Listing;
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
        $listings=Listing::latest()->get();
        return view('agent.agentDashboard',compact('listings'));
    }
   
    public function agentLeads(){
        return view('agent.leads');
    }

    public function discover(){
        $hostels = Listing::inRandomOrder()->take(5)->get();
        $roommates = roommate_profile::inRandomOrder()->take(2)->get();
        $feedItems = $hostels->merge($roommates)->shuffle();
        return view('student.discover',compact('feedItems'));
    }
    public function hostels(){
        $listings=Listing::latest()->get();
        return view('student.hostel',compact('listings'));
    }
    public function roomies(){
        $students=roommate_profile::latest()->get();
        return view('student.roomies',compact('students'));
    }

//     public function listingDetails(Listing $listing)
// {
//     return view('agent.listingDetails', compact('listing'));
// }

}
