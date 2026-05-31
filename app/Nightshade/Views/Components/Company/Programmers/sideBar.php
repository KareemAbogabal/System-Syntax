<?php

namespace App\Nightshade\Views\Components\Company\Programmers;
use Illuminate\View\Component;

class sideBar extends Component {
  public function __construct() {}
  public function render() {
    return view('company.programmers.components.sideBar');
  }
}
