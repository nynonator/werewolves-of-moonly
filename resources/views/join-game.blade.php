<x-layout>
    <form action='/join_game/{{ $game->id }}' method='POST'>
        @csrf
        <label for="name">Name</label>
        <input name="name"><br>
        <input type="submit" value="Join game">
    </form>
</x-layout>