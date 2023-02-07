<?php

namespace App\Http\Controllers;

use App\Models\Message;
use App\Models\User;
use Illuminate\Http\Request;

class MessageController extends Controller
{

    public function index()
    {
        return view('Message.index',[
            'messages' => Message::with('user')->get()
        ]);
    }

    public function show(Message $message)
    {
        return view('Message.show',[
            'message' => $message
        ]);
    }

    public function create()
    {
        return view('Message.create');
    }

    public function store()
    {
        $attributes = request()->validate([
            'title' => 'required',
            'message' => 'required'
        ]);

        $attributes['user_id'] = auth()->user()->id;

        Message::create($attributes);

        return redirect('/messages');
    }

    public function edit(Message $message)
    {
        return view('Message.update', [
            'message' => $message,
        ]);
    }

    public function update(Message $message)
    {
        $attributes = request()->validate([
            'title' => 'required',
            'message' => 'required'
        ]);

        $attributes['user_id'] = auth()->user()->id;

        $message->update($attributes);

        return redirect('/messages');
    }

    public function destroy(Message $message)
    {
        $message->delete();

        return redirect('/messages');
    }
}
