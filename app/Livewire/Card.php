<?php

namespace App\Livewire;

use Livewire\Component;

class Card extends Component
{
    public $cardOpen = false;
    public $player;                  ;
    public $requestedByAdmin = false;

    public function toggleCard() {
        $this->cardOpen = !$this->cardOpen;
    }

    public function render()
    {
        return view('livewire.card', ['player'=>$this->player]);
    }
}
