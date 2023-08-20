<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Collections;

class CollectionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        $collections = new Collections();
        $collections->id = 1;
        $collections->photo = 'https://es.wikipedia.org/wiki/Iron_Maiden_(%C3%A1lbum)#/media/Archivo:IRON_MAIDEN_-_Manchester_Apollo_-_1980.jpg';
        $collections->title = 'Iron Maiden';
        $collections->artist = 'Iron Maiden';
        $collections->album = 'Running Free';
        $collections->date = now(); 
        $collections->duration = null;
        $collections->sonido = 'https://open.spotify.com/intl-es/track/21wB3DaIk112Ry3mEzqfit'; // Cambia la URL por la ruta real del archivo de sonido
        $collections->save();

        $collections2 = new collections();
        $collections2->id = 2;
        $collections2->photo = 'https://es.wikipedia.org/wiki/Iron_Maiden_(%C3%A1lbum)#/media/Archivo:IRON_MAIDEN_-_Manchester_Apollo_-_1980.jpg';
        $collections2->title = "Genghis Khan";
        $collections2->artist = "Iron Maiden";
        $collections2->album = "Killers";
        $collections2->date = now(); 
        $collections2->duration = null;
        $collections2->sonido = 'https://open.spotify.com/intl-es/track/21wB3DaIk112Ry3mEzqfit'; // Cambia la URL por la ruta real del archivo de sonido
        $collections2->save();

        $collections3 = new collections();
        $collections3->id = 3;
        $collections3->photo = 'https://es.wikipedia.org/wiki/Iron_Maiden_(%C3%A1lbum)#/media/Archivo:IRON_MAIDEN_-_Manchester_Apollo_-_1980.jpg';
        $collections3->title = "Fortunes of War";
        $collections3->artist = "Iron Maiden";
        $collections3->album = "The Number of the Beast";
        $collections3->date = now(); 
        $collections3->duration = null;
        $collections3->sonido = 'https://open.spotify.com/intl-es/track/21wB3DaIk112Ry3mEzqfit'; // Cambia la URL por la ruta real del archivo de sonido
        $collections3->save();


        $collections4 = new collections();
        $collections4->id = 4;
        $collections4->photo = 'https://es.wikipedia.org/wiki/Iron_Maiden_(%C3%A1lbum)#/media/Archivo:IRON_MAIDEN_-_Manchester_Apollo_-_1980.jpg';
        $collections4->title = "Revelations";
        $collections4->artist = "Iron Maiden";
        $collections4->album = "Piece of Mind";
        $collections4->date = now(); 
        $collections4->duration = null;
        $collections4->sonido = 'https://open.spotify.com/intl-es/track/21wB3DaIk112Ry3mEzqfit'; // Cambia la URL por la ruta real del archivo de sonido
        $collections4->save();


    }
}
