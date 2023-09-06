<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<body>
<h1> Hello Astronaut</h1>
<h2> {{ $name }}</h2>
<h3> The current UNIX timestamp is {{time()}}</h3>
</body>
</html>
