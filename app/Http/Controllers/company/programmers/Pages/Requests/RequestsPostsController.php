<?php

namespace App\Http\Controllers\Company\Programmers\Pages\Requests;

use App\Http\Controllers\Controller;

class RequestsPostsController extends Controller
{
    public function index()
    {
        return view('company.programmers.pages.requests.requestsPosts');
    }
}
