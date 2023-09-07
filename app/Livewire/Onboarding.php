<?php

namespace App\Livewire;

use Livewire\Component;

class Onboarding extends Component
{

    public $selection = '';

    public $currentStep = 0;

    public function save($value) {
        $this->selection = $value;
    }

    public function nextStep($value) {
        $this->currentStep = $value;
    }

    public function render()
    {
        return view('livewire.onboarding');
    }
}
