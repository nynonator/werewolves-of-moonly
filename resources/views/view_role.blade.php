<x-layout>
    <p>Your role: {{ $player->role()->first()->name }}</p>
    <p>{{ $player->role()->first()->description }}</p>
    <img src="{{ $player->role()->first()->image }}">
</x-layout>