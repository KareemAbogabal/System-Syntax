<?php

namespace App\Http\Controllers\Company\Programmers\Pages\Analytics;

use App\Http\Controllers\Controller;

class CompanyAnalyticsController extends Controller
{
    public function index()
    {
        return view('company.programmers.pages.analytics.companyAnalytics');
    }
}
