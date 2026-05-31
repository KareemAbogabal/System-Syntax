<?php

namespace App\Http\Controllers\Company\Programmers\Pages\Tasks;

use App\Http\Controllers\Controller;

class ApprovalsController extends Controller
{
    public function index()
    {
        return view('company.programmers.pages.tasks.approvals');
    }
}
