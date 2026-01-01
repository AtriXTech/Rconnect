<?php

namespace App\Http\Controllers;

use App\Models\Conversation;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ChatController extends Controller
{
    public function list(){
        return view('chat.list');
    }
    public function show(){
        return view('chat.show');
    }
  

public function startChat(User $user)
{
    $authUserId = Auth::id();

    $conversation = Conversation::where(function ($q) use ($authUserId, $user) {
        $q->where('user_one_id', $authUserId)
          ->where('user_two_id', $user->id);
    })->orWhere(function ($q) use ($authUserId, $user) {
        $q->where('user_one_id', $user->id)
          ->where('user_two_id', $authUserId);
    })->first();

    if (! $conversation) {
        $conversation = Conversation::create([
            'user_one_id' => $authUserId,
            'user_two_id' => $user->id,
        ]);
    }

    return redirect()->route('show', $conversation);
}


}
