<?php

namespace App\Nightshade\Views\Components;

use Illuminate\View\Component;

class Notification extends Component {
  public function __construct(
    public ?string $type = null,
    public ?string $message = null,
  ) {}
  public function render() {
    return view('components.notification');
  }
}
