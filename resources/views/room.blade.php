@extends('templates/main')
@section('script_includes')
    
@endsection
@section('content')
    <h1>Room {{ $room->name}} </h1>
    <p>{{"Entrées: " . $room->records('entry')->count()}}</p>
    <p>{{"Sorties: " . $room->records('exit')->count()}}</p>
@endsection
@section('scripts')
    <canvas id="myChart" width="800" height="400"></canvas>
    <script src="{{asset("js/room.js")}}"></script>
@endsection