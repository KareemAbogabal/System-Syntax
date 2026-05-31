<?php

namespace App\Nightshade\Views\Components\Company;
use Illuminate\View\Component;

class EntityPicker extends Component {
  public function __construct(
    public string $name,
    public ?int $choose = 1,
    public ?int $size = null,
    public ?string $show = null,
    public ?string $buttonDelete = null,
  ) {}
  public function render() {
    return view('company.components.entityPicker');
  }
}
