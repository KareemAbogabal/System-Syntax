<?php

namespace App\Http\Controllers\Website\Web\Pages;

use App\Http\Controllers\Controller;

class ContactUsController extends Controller
{
    public function index()
    {
        return view('website.web.pages.contactUs');
    }
}
