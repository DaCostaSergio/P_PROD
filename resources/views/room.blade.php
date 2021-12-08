@extends('templates/main')
@section('script_includes')
    
@endsection
@section('content')
    <h1>Room {{ $room->name}} </h1>
    <p>{{"Entrées: " . $room->records('entry')->count()}}</p>
    <p>{{"Sorties: " . $room->records('exit')->count()}}</p>
    <?php
    $entries = $room->records('entry')->get();
    $from = new DateTime('08:30');
    $count;

    $timeofentry = new DateTime(($entries[0])->created_at->toTimeString());

    dd($from->diff($timeofentry));
    foreach ($entries as $entry)
    {

    }
    ?>
    
@endsection
@section('scripts')
    <canvas id="myChart" width="800" height="400"></canvas>
    <script>
        {{ 'let entries = [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16];' }}
    </script>
    <script src="{{asset("js/room.js")}}"></script>
@endsection