<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Collection;

class FavoritesController extends Controller
{
    public function favorites()
    {   
        $collection = Collection::all();
        return view('Favorites', ['collection' => $collection]);
    }
}
