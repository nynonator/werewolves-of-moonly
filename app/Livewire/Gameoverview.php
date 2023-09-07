<?php

namespace App\Livewire;

use Livewire\Component;

class Gameoverview extends Component
{
    public $selection = '';

    public $currentStep = 0;

    public $colors = ['bg-yellow-400', 'bg-cyan-500', 'bg-rose-500'];
    public $players = ['player1', 'player2', 'player3'];

    public function save($value) {
        $this->selection = $value;
    }

    public function nextStep($value) {
        $this->currentStep = $value;
    }

    public function render()
    {
        return view('livewire.gameoverview');
    }
}
