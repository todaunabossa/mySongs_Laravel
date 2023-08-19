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

        $collections = new collections();
        $collections->title = "Iron Maiden";
        $collections->artist = "Iron Maiden";
        $collections->album = "Running Free";
        $collections->save();

        $collections2 = new collections();
        $collections2->title = "Genghis Khan";
        $collections2->artist = "Iron Maiden";
        $collections2->album = "Killers";
        $collections2->save();

        $collections3 = new collections();
        $collections3->title = "Fortunes of War";
        $collections3->artist = "Iron Maiden";
        $collections3->album = "The Number of the Beast";
        $collections3->save();

        $collection4 = new collections();
        $collection4->title = "Revelations";
        $collection4->artist = "Iron Maiden";
        $collection4->album = "Piece of Mind";
        $collection4->save();


    }
}
