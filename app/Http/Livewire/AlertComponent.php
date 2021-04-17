<?php

namespace App\Http\Livewire;

use Livewire\Component;

class AlertComponent extends Component
{
    public $type, $message;

    public function render()
    {
        return view('livewire.alert-component');
    }
}
