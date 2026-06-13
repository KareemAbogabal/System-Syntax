<?php

namespace App\Http\Controllers\Website\Web;

use App\Http\Controllers\Controller;
use App\Cryption\Cryptor;

class WelcomeController extends Controller {
  public function index() {
    // Cryptor::encryption("كريم ابوجبل");
    Cryptor::encryption("Hello world");
    Cryptor::decryption("jPVMRHNKuQkKkNqSV ACOE");
    return view('website.web.welcome');
  }
}
