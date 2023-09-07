<ul>
    @foreach($game->players()->get() as $current_player)
        <li>
            {{ $current_player->name }}
            @if($current_player->id == $player->id)
                (You)
            @endif
        </li>
    @endforeach
</ul>