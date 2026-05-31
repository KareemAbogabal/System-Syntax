<?php

namespace App\Http\Controllers\Company\Programmers\Pages\Reports;

use App\Http\Controllers\Controller;

class BranchReportController extends Controller
{
    public function index()
    {
        return view('company.programmers.pages.reports.branchReport');
    }
}
