<x-layout>
    <div>
        <form action='/create_game' method='POST'>
            @csrf
            <label for="name">Name</label>
            <input name="name"><br>
            <input type="submit" value="Create game">
        </form>
        
        <form action='/join_game' method='POST'>
            @csrf
            <label for="game_pin">Game Pin</label>
            <input name="game_pin" type="number"><br>
            <input type="submit" value="Join game">
        </form>
    </div>
</x-layout>