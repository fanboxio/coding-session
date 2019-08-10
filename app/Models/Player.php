<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;

class Player extends Model
{
    use LogsActivity;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'player_group_id',
    ];

    /**
     * The attributes that are loggable by activitylog.
     *
     * @var array
     */
    protected static $logAttributes = ['name', 'player_group_id'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function group()
    {
        return $this->belongsTo(PlayerGroup::class);
    }
}
