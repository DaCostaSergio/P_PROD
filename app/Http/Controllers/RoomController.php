<?php

namespace App\Http\Controllers;

use App\Models\Record;
use App\Models\Room;

use Illuminate\Http\Request;

class RoomController extends Controller
{
    public function index($id){
        
        $room = Room::find($id);

        $entries = $room->records('entry');
        $exits = $room->records('exit');

        return view('room')->with(['room' => $room, 'entries' => $entries,'exits' => $exits]);
    }
}
