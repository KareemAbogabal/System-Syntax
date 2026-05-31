<?php

namespace App\Http\Controllers\Company\Programmers\Pages;

use App\Http\Controllers\Controller;

class WarningsController extends Controller
{
    public function index()
    {
        return view('company.programmers.pages.warnings');
    }
}
