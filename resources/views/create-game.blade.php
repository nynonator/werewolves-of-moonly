<x-layout>
    <div>
        <form action='/create_game' method='POST'>
            @csrf
            <label for="name">Name</label>
            <input name="name"><br>
            <input type="submit" value="Create game">
        </form>
    </div>
</x-layout>