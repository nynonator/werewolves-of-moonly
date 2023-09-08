<?php

namespace App\Livewire;

use Livewire\Component;
use app\Models\Game;

class Gameoverview extends Component
{
    public $selection = '';

    public $game = null;

    public $currentStep = 0;
    public $colors = ['#FFBA2F', '#ED4C78', '#3DC1CC'];

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

    public function mount(Game $game)
    {
        $this->game = $game;
    }
}
