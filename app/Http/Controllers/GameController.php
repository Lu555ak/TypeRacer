<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GameController extends Controller
{
    public function startGame(Request $request){
        $diff = $request->input("difficulty");
        $len = $request->input("length");
        $text = DB::table('texts')->where('difficulty', $diff)->where('length', $len)->inRandomOrder()->get()->value('content');
        return view('game')->withText($text); 
    }
}
