<?php

namespace App\Http\Controllers;

use App\Models\Room;
use App\Models\Record;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index(){
        $rooms = Room::all();
        return view('datatest')->with(['rooms' => $rooms]);
    }    
}
