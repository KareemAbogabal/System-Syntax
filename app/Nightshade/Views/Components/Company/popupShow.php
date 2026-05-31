<?php

namespace App\Nightshade\Views\Components\Company;
use Illuminate\View\Component;

class PopupShow extends Component {
  public function __construct(
    public string $dataFollowButton,
  ) {}
  public function render() {
    return view('company.components.popupShow');
  }
}
