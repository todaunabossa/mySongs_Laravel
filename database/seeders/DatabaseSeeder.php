<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Collection;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        $gallery = new collection();
        $gallery->title = "The Number of the Beast";
        $gallery->artist = "Iron Maiden";
        $gallery->album = "Powerslave";
        $gallery->save();

    }
}
