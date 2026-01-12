<?php

namespace App\Http\Controllers;

use App\Models\Conversation;
use App\Models\Message;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ChatController extends Controller
{
    public function list(){
        return view('chat.list');
    }
   public function show(Conversation $conversation)
{
    // ensure only participants can see it
    abort_if(
        !in_array(Auth::id(), [$conversation->user_one_id, $conversation->user_two_id]),
        403
    );

    // load messages with sender
    $conversation->load('messages.sender');

    return view('chat.show', compact('conversation'));
}

public function sendMessage(Request $request, Conversation $conversation)
{
    // make sure only participants can send a message
    abort_if(
        !in_array(Auth::id(), [$conversation->user_one_id, $conversation->user_two_id]),
        403
    );

    // allow either text OR media (not forcing text only)
    $request->validate([
        'body'  => 'nullable|string',
       'media' => 'nullable|file|mimes:jpg,jpeg,png,mp4,mov,webm|max:10240'
    ]);

    $pathToFile = null;

    // handle file upload
    if ($request->hasFile('media')) {
        $pathToFile = $request->file('media')->store('chat_media', 'public');
    }

    Message::create([
        'conversation_id' => $conversation->id,
        'sender_id'       => Auth::id(),
        'body'            => $request->body,
        'media'           => $pathToFile,   // now defined correctly
    ]);

    return back();
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
