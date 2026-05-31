<?php

namespace App\Nightshade\Views\Components\Website\Web;
use Illuminate\View\Component;

class Nav extends Component {
  public function __construct(
    public array $ul,
  ) {}
  public function render() {
    return view('website.web.components.nav');
  }
}
