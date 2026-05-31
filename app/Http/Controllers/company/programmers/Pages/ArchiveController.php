<?php

namespace App\Http\Controllers\Company\Programmers\Pages;

use App\Http\Controllers\Controller;

class ArchiveController extends Controller
{
    public function index()
    {
        return view('company.programmers.pages.archive');
    }
}
