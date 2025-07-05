<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
  public function create() {
    return view('contact');
}

public function store(Request $request) {
    $validated = $request->validate([
        'name' => 'required',
        'email' => 'required|email',
        'message' => 'required',
    ]);

    Message::create($validated);
    return redirect('/contact')->with('success', 'Thanks for your message!');
}  
}
