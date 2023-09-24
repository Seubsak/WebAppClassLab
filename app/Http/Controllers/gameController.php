<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class gameController extends Controller
{
    public function index(){
        // $gamename = ["Baldur's Gate 3","The Texas Chain Saw Massacre","Sengoku Dynasty"];
        $gamename = DB::select("SELECT game_name FROM game");
        return view('game')->with('gamename', $gamename);

    }
    function gameif(){
        return view("layouts\gameinfo");
    }

}
