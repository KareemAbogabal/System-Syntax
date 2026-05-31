<?php

namespace App\Http\Controllers\Company\Programmers\Pages\Users;

use App\Http\Controllers\Controller;

class UsersController extends Controller
{
    public function index()
    {
        return view('company.programmers.pages.users.users');
    }
}
