<div>
    <div class="w-full bg-white/30 p-8 rounded-lg">
        @if ($cardOpen)
        <h2 class="font-bold uppercase text-2xl">{{ $player->role()->first()->name }}</h2>
        <p class="opacity-75 mt-2 text-xs leading-relaxed"> {{ $player->role()->first()->description }} </p>
        <img class="mt-4" src="{{ asset($player->role()->first()->image) }}" />
        @else
        <img class="mt-4" src="{{ asset('images/cardbg.png') }}" />
        @endif
    </div>
    <div class="mt-8">

        <button wire:click="toggleCard()"
            class="uppercase font-bold bg-[#FFBA2F] p-4 w-full rounded-lg">
            @if ($cardOpen)
                akkoord
            @else
                onthul
            @endif
        </button>
    </div>
</div>
