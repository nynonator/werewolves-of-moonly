<x-layout>
    <form action='/join_game' method='POST'>
        @csrf
        <label for="game_pin">Game Pin</label>
        <input name="game_pin" type="number"><br>
        <input type="submit" value="Join game">
    </form>
</x-layout>