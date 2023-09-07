<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use App\Models\Player;
use App\Models\Game;
use App\Models\Role;

class GameController extends Controller
{
    public function createGame(Request $request) {
        $game = new Game;
        $game->room_pin = rand(1000, 9999);
        $game->save();

        return Redirect::to('/game/' . $game->id);
    }

    public function joinGame(Request $request) {
        $game = Game::where('room_pin', $request->room_pin)->first();
        if(!$game) {
            return view('error', [
                'message' => 'game with pin "' . $request->room_pin . '" does not exist'
            ]);
        }

        $player = new Player;
        $player->name = $request->name;
        $player->game_id = $game->id;
        $player->is_admin = false;
        $player->save();

        return Redirect::to('/game/' . $game->id . '/' . $player->id);
    }

    public function viewGame(Game $game, Player $player) {
        return view('game', [
            'game' => $game,
            'player' => $player
        ]);
    }

    public function adminViewGame(Game $game) {
        return view('game', [
            'game' => $game,
            'player' => null
        ]);
    }

    public function getPlayers(Game $game, Player $player) {
        return view('game_players_list', [
            'game' => $game,
            'player' => $player
        ]);
    }

    public function adminGetPlayers(Game $game) {
        return view('game_players_list', [
            'game' => $game,
        ]);
    }

    public function getStatus(Game $game, Player $player) {
        foreach($game->players()->get() as $current) {
            if($current->role_id == null) {
                // roles are still not assigned - game has not started yet

                return response()->json(['status' => 'lobby'], 200, []);
            }
        }

        return response()->json(['status' => 'started'], 200, []);
    }

    public function assignRoles(Game $game) {
        $playerCount = $game->players()->count();

        $players = $game->players()->get()->pluck('id')->toArray();
        shuffle($players); // randomize player order so roles are assigned randomly

        $roles = Role::all();

        foreach($roles as $role) {
            $amount = floor($playerCount * $role->percentage);

            for($i = 0; $i < $amount; $i++) { // assign as many players as needed
                $player = Player::find(array_pop($players));

                $player->role_id = $role->id;
                $player->save();
            }
        }

        foreach($players as $player) { // set all remaining players as citizens
            $player = Player::find($player);

            $player->role_id = 1; // 1 = citizen
            $player->save();
        }
    }

    public function startGame(Game $game) {
        if($game->players()->count() < 5) {
            return view('error', [
                'message' => 'cannot start a game with less than 5 players!'
            ]);
        }

        $this->assignRoles($game);

        return Redirect::to('/game/' . $game->id . '/view_role');
    }

    public function viewRole(Game $game, Player $player) {
        return view('card.index', [
            'game' => $game,
            'player' => $player
        ]);
    }

    public function adminViewRoles(Game $game) {
        return view('admin_view_roles', [
            'game' => $game
        ]);
    }
}
