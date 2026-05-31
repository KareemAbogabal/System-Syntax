<?php

namespace App\Http\Controllers\Company\Programmers\Pages\Chats;

use App\Http\Controllers\Controller;

class ChatController extends Controller
{
    public function index()
    {
        return view('company.programmers.pages.chats.chat');
    }
}
