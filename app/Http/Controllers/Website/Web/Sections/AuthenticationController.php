<?php

namespace App\Http\Controllers\Website\Web\Sections;

use App\Http\Controllers\Controller;

class AuthenticationController extends Controller
{
    public function index()
    {
        return view('website.web.sections.authentication.authentication');
    }
}
