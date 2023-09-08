<div>
    <span class="opacity-75 text-xs leading-relaxed">Nu kun je van start als verteller. De hele space shuttle van Moonly
        luistert nu naar jouw! Onderstaande overzicht van spelers heb je alleen nodig bij de actie van de ziener.
    </span>
    <div class="mt-12 flex flex-wrap justify-center">
        @foreach ($game->players()->get() as $player)
        <span style="background-color:{{ $player->color }}" class="p-4 rounded-full px-8 m-2
             @if ($selection == $player->id) border-4 border-white @endif"
                wire:click="save('{{ $player->id }}')">{{ $player->name }}</span>
        @endforeach
    </div>
    <div class="mt-8 w-full">

        <a href="/game/{{ $game->id }}/{{ $selection }}/adminviewrole"
            class="uppercase block font-bold @if ($selection == '') bg-[#FFBA2F]/40
        @else bg-[#FFBA2F] @endif
           p-4 w-full rounded-lg"
            @if ($selection == '') disabled @endif>
            bevestig keuze
        </a>
    </div>
</div>
