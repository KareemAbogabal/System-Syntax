<?php

namespace App\Http\Controllers\Company\Calls;

use App\Http\Controllers\Controller;

class RoomController extends Controller
{
    public function show($roomId)
    {
        return view('company.calls.room', [
            'roomId' => $roomId
        ]);
    }
}
