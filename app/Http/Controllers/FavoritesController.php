<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Songs;

class FavoritesController extends Controller
{
    public function favorites()
    {   
        $songs = Songs::all();
        return view('Favorites', ['songs' => $songs]);
    }
}
