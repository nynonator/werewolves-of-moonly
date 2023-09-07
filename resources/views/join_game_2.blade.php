<x-layout>
    <form action='/join_game/{{ $game->id }}' method='POST'>
        @csrf
        <label for="name">Name</label>
        <input name="name"><br>
        <input type="submit" value="Join game">
    </form>
</x-layout>

<x-app-layout>
    <span class="opacity-75 text-xs leading-relaxed">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla
        tristique ligula turpis, id tincidunt diam feugiat et.</span>
    <h3 class="font-bold mt-12">KIES UIT</h3>
    <div class="mt-4 flex justify-center flex-col w-full">
        <livewire:onboarding>
    </div>
</x-app-layout>