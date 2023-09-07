<x-layout>
    <p>Game PIN: {{ $game->room_pin }}</p>
    <p>Players:</p>
    
    <div id="players">
        @include('game_players_list')
    </div>

    @if($player->is_admin)
        <a href="/game/{{ $game->id }}/{{ $player->id }}/start" class="bg-gray-400 hover:bg-gray-500 px-2 py-1 rounded-sm">Start game!</a>
    @else
        <p>Waiting for host to start...</p>
    @endif

    <script>
        /* Use javascript to refresh player list */
        function refresh_players_list() {
            $("#players").load("/game/{{ $game->id }}/{{ $player->id }}/get_players");
        }

        async function check_if_game_started() {
            const data = await fetch('/game/{{ $game->id }}/{{ $player->id }}/get_status');
            const json = await data.json();

            if(json.status != 'lobby') {
                window.location = '/game/{{ $game->id }}/{{ $player->id }}/view_role';
            }
        }

        document.addEventListener("DOMContentLoaded", () => {
            setInterval(refresh_players_list, 2500);
            setInterval(check_if_game_started, 2500);
        });
    </script>
</x-layout>