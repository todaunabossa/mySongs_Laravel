<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CollectionController;

Route::get('/home', [HomeController::class, 'Welcome']);
// '' -> llama a la función no a la vista!//

Route::get('/collection/favorites', [CollectionController::class, 'Index'])->name('Favorites');;

