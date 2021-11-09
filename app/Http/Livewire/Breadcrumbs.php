<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Breadcrumbs extends Component
{
  public $breadcrumbs;

  public function mount($breadcrumbs)
  {
    $this->breadcrumbs = $breadcrumbs;
  }

  public function render()
  {
    return view('livewire.breadcrumbs', [
      'breadcrumbs' => $this->breadcrumbs,
    ]);
  }
}
