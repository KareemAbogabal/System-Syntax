<?php

namespace App\Http\Controllers\Company\Programmers\Pages\Users;

use App\Http\Controllers\Controller;

class PromotionsController extends Controller
{
    public function index()
    {
        return view('company.programmers.pages.users.promotions');
    }
}
