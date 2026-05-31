<?php

namespace App\Nightshade\Views\Components\Website\Dashbord;
use Illuminate\View\Component;

class sideBar extends Component {
  public function __construct() {}
  public function render() {
    return view('website.dashbord.components.sideBar');
  }
}
