<?php

use App\Models\Club;
use Illuminate\Database\Seeder;

class TeamsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $clubs = Club::all();

        $clubs->each(function($club) {
            factory(\App\Models\Team::class, 3)->create([
                'club_id' => $club->id,
            ]);
        });

    }
}
