<?php

namespace App\Nightshade\Views\Components\Website\Web;
use Illuminate\View\Component;

class FormLogin extends Component {
  public function __construct() {}
  public function render() {
    return view('website.web.components.formLogin');
  }
}
