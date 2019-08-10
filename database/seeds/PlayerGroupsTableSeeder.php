<?php

use App\Models\Team;
use Illuminate\Database\Seeder;

class PlayerGroupsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $teams = Team::all();

        $teams->each(function($team) {
            factory(\App\Models\PlayerGroup::class, 4)->create([
                'team_id' => $team->id,
            ]);
        });

    }
}
