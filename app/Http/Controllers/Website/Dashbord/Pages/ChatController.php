<?php

namespace App\Http\Controllers\Website\Dashbord\Pages;

use App\Http\Controllers\Controller;

class ChatController extends Controller
{
    public function index()
    {
        return view('website.dashbord.pages.chat');
    }
}
