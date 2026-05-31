<?php

namespace App\Http\Controllers\Company\Programmers\Pages\Requests;

use App\Http\Controllers\Controller;

class RequestsCompanyController extends Controller
{
    public function index()
    {
        return view('company.programmers.pages.requests.requestsCompany');
    }
}
