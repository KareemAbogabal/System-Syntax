<?php

namespace App\Http\Controllers\Company\Programmers\Pages\Clients;

use App\Http\Controllers\Controller;

class AddClientsController extends Controller
{
    public function index()
    {
        return view('company.programmers.pages.clients.addClients');
    }
}
