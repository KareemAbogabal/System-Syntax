<?php

namespace App\Nightshade\Views\Components\Company;
use Illuminate\View\Component;

class Tasks extends Component {
  public $events;
  public function __construct($events = null) {
    $this->events = $events ?? [];
  }
  public function render() {
    return view('company.components.tasksShell');
  }
}
