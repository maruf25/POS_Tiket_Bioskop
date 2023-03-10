<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FilmController extends Controller
{
    //
    public function search(Request $request) {
        if($request->has('search')) {
            $film = Film::where('nama', 'LIKE', '$', $request-> search->search, '$')->get();
        }
        else {
            $film = Film::all();
        }
        
    }
}
