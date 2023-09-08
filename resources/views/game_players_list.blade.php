@foreach($game->players()->get() as $current_player)
    <span style="background-color:{{ $current_player->color }}" class="p-4 rounded-full px-8 m-2">{{ $current_player->name }}</span>
@endforeach