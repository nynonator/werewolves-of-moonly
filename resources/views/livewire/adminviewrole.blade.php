<div>
    <div class="w-full bg-white/30 p-8 rounded-lg">
        <h2 class="font-bold uppercase text-2xl">{{ $cardName }}</h2>
        <p class="opacity-75 mt-2 text-xs leading-relaxed"> {{ $cardDescription }} </p>
        <img class="mt-4" src="{{ asset($imageUrl) }}" />
    </div>
    <a href="/game/{{ $game_id }}/view_role" class="uppercase font-bold">
        <div class="mt-8  bg-[#FFBA2F] p-4 w-full rounded-lg">
            terug
        </div>
    </a>
</div>
