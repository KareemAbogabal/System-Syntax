<?php

namespace App\Http\Controllers\Website\Web\Sections\Benefits;

use App\Http\Controllers\Controller;

class SpecialController extends Controller
{
    public function index()
    {
        return view('website.web.sections.benefits.special');
    }
}
