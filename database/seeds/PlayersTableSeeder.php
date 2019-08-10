<?php

use App\Models\PlayerGroup;
use Illuminate\Database\Seeder;

class PlayersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $playerGroups = PlayerGroup::all();

        $playerGroups->each(function($group) {
            factory(\App\Models\Player::class, 5)->create([
                'player_group_id' => $group->id,
            ]);
        });

    }
}
