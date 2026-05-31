<?php

namespace App\Http\Controllers\Company\Programmers\Pages\Users;

use App\Http\Controllers\Controller;

class PermissionsController extends Controller
{
    public function index()
    {
        return view('company.programmers.pages.users.permissions');
    }
}
