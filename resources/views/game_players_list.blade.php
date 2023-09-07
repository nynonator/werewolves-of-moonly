@foreach($game->players()->get() as $current_player)
    <span class="bg-indigo-500 p-4 rounded-full px-8 m-2">{{ $current_player->name }}</span>
@endforeach