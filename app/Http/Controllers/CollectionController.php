<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Collections;

class CollectionController extends Controller
{
    public function index()
    { $collection = Collections::all();
      {return view('collection.favorites', ['collection' => $collection]);}
    }
    
    public function create()
    {
        {return view('collection.create');}
    }

    public function store(Request $request)
    {
        // Lógica para guardar una nueva colección
    }

    // Otros métodos como edit, update, destroy, etc.
}
