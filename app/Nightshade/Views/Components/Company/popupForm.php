<?php

namespace App\Nightshade\Views\Components\Company;
use Illuminate\View\Component;

class PopupForm extends Component {
  public function __construct(
    public string $pathPostForm,
    public string $dataFollowButton,
    public ?string $dataFollowStateProject = null,
    public string $header,
    public string $description,
  ) {}
  public function render() {
    return view('company.components.popupForm');
  }
}
