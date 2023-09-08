<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Player;

class Adminviewrole extends Component
{
    public $cardName = null;
    public $cardDescription = null;
    public $imageUrl = null;
    public $cardOpen = false;
    public $player = null;
    public $game_id = null;

    public function render()
    {
        return view('livewire.adminviewrole');
    }

    public function mount(Player $player)
    {
        $role = $player->role()->first();
        $this->cardName = $role->name;
        $this->cardDescription = $role->description;
        $this->imageUrl = $role->image;
        $this->game_id = $player->game_id;
    }
}
