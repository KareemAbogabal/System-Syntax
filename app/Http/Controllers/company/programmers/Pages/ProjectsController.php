<?php

namespace App\Http\Controllers\Company\Programmers\Pages;

use App\Http\Controllers\Controller;

class ProjectsController extends Controller
{
    public function index()
    {
        return view('company.programmers.pages.projects');
    }
}
