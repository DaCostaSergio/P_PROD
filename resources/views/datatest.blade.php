<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test</title>
</head>
<body>
    @foreach ($rooms as $room)
        <p><a href="{{ url("/room/{$room->id}") }}">{{$room->name}}</a></p>

        <p>{{"Personnes dans la salle: " . $room->number_of_people}}</p>
        <p>{{"Entrées: " . $room->records('entry')->count()}}</p>
        <p>{{"Sorties: " . $room->records('exit')->count()}}</p>
    @endforeach
</body>
</html>