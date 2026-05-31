<?php

namespace App\Nightshade\Views\Components\Company;
use Illuminate\View\Component;

class fillterBar extends Component {
  public function __construct(
    public array $pills,
  ) {}
  public function render() {
    return view('company.components.fillterBar');
  }
}
