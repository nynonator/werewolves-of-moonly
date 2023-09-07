<x-app-layout>
    <span class="opacity-75 text-xs leading-relaxed">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla
        tristique ligula turpis, id tincidunt diam feugiat et.</span>
    <div class="mt-4 flex justify-center flex-col w-full bg-white rounded-lg p-2 mt-10">
        <span class="text-black text-sm opacity-40">Game pin</span>
        <span class=" font-bold text-black text-3xl mt-2">{{ $game->room_pin }}</span>
    </div>
    <div class="mt-12 flex flex-wrap justify-center" id="players">
        @include('game_players_list')
    </div>
    <div class="mt-8 w-full">

        <button class="uppercase font-bold bg-[#FFBA2F]/40
           p-4 w-full rounded-lg">
            bevestig keuze
        </button>
    </div>

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
</x-app-layout>
