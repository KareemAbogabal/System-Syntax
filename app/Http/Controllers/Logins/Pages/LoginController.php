<?php

namespace App\Http\Controllers\Logins\Pages;

use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    public function index()
    {
        return view('logins.pages.login');
    }
}
