<?php

namespace App\Http\Controllers\Company\Programmers\Pages\Clients;

use App\Http\Controllers\Controller;

class AccountsController extends Controller
{
    public function index()
    {
        return view('company.programmers.pages.clients.accounts');
    }
}
