<?php

namespace App\Nightshade\Views\Components\Company;
use Illuminate\View\Component;

class Chat extends Component {
  public function __construct() {}
  public function render() {
    return view('company.components.chat');
  }
}
