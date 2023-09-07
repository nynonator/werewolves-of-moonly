<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Player;

class Card extends Component
{
    public $cardName = null;
    public $cardDescription = null;
    public $imageUrl = null;
    public $cardOpen = false;

    public function toggleCard() {
        $this->cardOpen = !$this->cardOpen;
    }

    public function render()
    {
        return view('livewire.card');
    }

    public function mount(Player $player)
    {
        $role = $player->role()->first();
        $this->cardName = $role->name; 
        $this->cardDescription = $role->description; 
        $this->imageUrl = $role->image; 
    }
}
