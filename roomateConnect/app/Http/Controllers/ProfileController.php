<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
     public function studentProfile(User $user)
{
    $user->load(['roommate_profile', 'preference']);

    return view('student.studentProfile', compact('user'));
}
 public function agentProfile(User $agent){
    $agent->load(['agent_profile']);
        return view('agent.agentProfile',compact('agent_profile'));
    }





}
