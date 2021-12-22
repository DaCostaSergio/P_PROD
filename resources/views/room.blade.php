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

    //dd($from->diff($timeofentry));

    $entriesArray = [0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0]

    /*foreach ($entries as $entry)
    {
        $create
        for ($i = 0; $i < ; $i++) { 
            
        }
    }*/

    
    ?>
    
@endsection
@section('scripts')
    <canvas id="myChart" width="800" height="400"></canvas>
    <script>
        {{ 'let entries = [9,16,43,24,42,16,9,23,48,31,11,42,33,22,8,48];' }}
    </script>
    <script src="{{asset("js/room.js")}}"></script>
@endsection