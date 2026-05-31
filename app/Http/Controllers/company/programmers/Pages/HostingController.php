<?php

namespace App\Http\Controllers\Company\Programmers\Pages;

use App\Http\Controllers\Controller;

class HostingController extends Controller
{
    public function index()
    {
        return view('company.programmers.pages.hosting');
    }
}
