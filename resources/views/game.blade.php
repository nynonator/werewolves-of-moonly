<x-app-layout>
    <span class="opacity-75 text-xs leading-relaxed">Als verteller is het even wachten geblazen. Totdat alle spelers zijn
        aangemeld. Wanneer iedereen te zien is in het overzicht kun je het spel starten.</span>
    <div class="mt-12 flex justify-center flex-col w-full bg-white rounded-lg p-2">
        <span class="text-black text-sm opacity-40">Game pin</span>
        <span class=" font-bold text-black text-3xl mt-2">{{ $game->room_pin }}</span>
    </div>
    <div class="mt-12 flex flex-wrap justify-center" id="players">
        @include('game_players_list')
    </div>
    <div class="mt-8 w-full">
        @if ($player == null)
            <form action="/game/{{ $game->id }}/start" method="GET">
                <button id="start" disabled="true"
                    class="uppercase font-bold bg-[#FFBA2F] disabled:bg-[#FFBA2F]/40
                p-4 w-full rounded-lg">
                    Start
                </button>
            </form>
        @endif
    </div>

    <script>
        /* Use javascript to refresh player list */
        function refresh_players_list() {
            @if ($player == null)
                $("#players").load("/game/{{ $game->id }}/get_players", function() {
                    if ($("#players > *").length < 5) {
                        $("#start").prop("disabled", true);
                    } else {
                        $("#start").prop("disabled", false);
                    }
                });
            @else
                $("#players").load("/game/{{ $game->id }}/{{ $player->id }}/get_players");
            @endif
        }

        @if ($player != null)
            async function check_if_game_started() {
                const data = await fetch('/game/{{ $game->id }}/{{ $player->id }}/get_status');
                const json = await data.json();

                if (json.status != 'lobby') {
                    window.location = '/game/{{ $game->id }}/{{ $player->id }}/view_role';
                }
            }
        @endif

        document.addEventListener("DOMContentLoaded", () => {
            setInterval(refresh_players_list, 2500);
            @if ($player != null)
                setInterval(check_if_game_started, 2500);
            @endif
        });
    </script>
</x-app-layout>
