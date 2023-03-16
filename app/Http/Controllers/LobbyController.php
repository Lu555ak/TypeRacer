<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LobbyController extends Controller
{
    public function openLobby()
    {
        return view('lobby');  
    }
}
