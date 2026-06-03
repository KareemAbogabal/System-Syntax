<?php

namespace App\Http\Controllers\Website\Web;

use App\Http\Controllers\Controller;
use App\Cryption\Cryptor;

class WelcomeController extends Controller {
  public function index() {
    Cryptor::encryption("Hello");
    Cryptor::decryption("MNREPHWA B");
    return view('website.web.welcome');
  }
}
