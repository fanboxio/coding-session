<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PlayerGroup extends Model
{
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function team() {
        return $this->belongsTo(Team::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function players() {
        return $this->hasMany(Player::class);
    }
}
