<x-layout>
    <div>
        <form action='/create_game' method='GET'>
            @csrf
            <input type="submit" value="Verteller">
        </form>
        
        <form action='/join_game' method='GET'>
            @csrf
            <input type="submit" value="Speler">
        </form>
    </div>
</x-layout>