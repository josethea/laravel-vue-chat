<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function index() {
        $messages = Message::with(['user'])->get();
        return response()->json($messages);
    }
}