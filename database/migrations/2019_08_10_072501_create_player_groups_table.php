<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlayerGroupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('player_groups', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('name');
            $table->unsignedBigInteger('team_id');

            $table->timestamps();

            /*
             * Foreign constraints
             */
            $table->foreign('team_id')
                ->references('id')->on('teams')
                ->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('player_groups');
    }
}
