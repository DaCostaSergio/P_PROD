<h1>Room {{ $room->name}} </h1>
<p>{{"Entrées: " . $room->records('entry')->count()}}</p>
<p>{{"Sorties: " . $room->records('exit')->count()}}</p>