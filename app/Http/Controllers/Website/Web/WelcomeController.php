<?php

namespace App\Http\Controllers\Website\Web;

use App\Http\Controllers\Controller;

class WelcomeController extends Controller
{
    public function index()
    {
        return view('website.web.welcome');
    }
}
