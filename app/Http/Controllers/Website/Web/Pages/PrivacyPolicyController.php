<?php

namespace App\Http\Controllers\Website\Web\Pages;

use App\Http\Controllers\Controller;

class PrivacyPolicyController extends Controller
{
    public function index()
    {
        return view('website.web.pages.privacyPolicy');
    }
}
