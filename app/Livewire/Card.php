<?php

namespace App\Livewire;

use Livewire\Component;

class Card extends Component
{
    public $cardName = 'alien';
    public $cardDescription = 'Iedere nacht verslinden zij een astronaut. Overdag proberen zij hun nachtelijke gedaante te verbergen en zo aan de wraak van de astronauten te ontsnappen.
    ';
    public $imageUrl = '/images/alien.png';
    public $cardOpen = false;

    public function toggleCard() {
        $this->cardOpen = !$this->cardOpen;
    }

    public function render()
    {
        return view('livewire.card');
    }
}
