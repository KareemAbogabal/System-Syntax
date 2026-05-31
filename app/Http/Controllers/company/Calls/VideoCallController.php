<?php

namespace App\Http\Controllers\Company\Calls;

use App\Http\Controllers\Controller;

class VideoCallController extends Controller
{
    public function index()
    {
        return view('company.calls.videoCall');
    }
}
