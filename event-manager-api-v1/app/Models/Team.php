<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    /** @use HasFactory<\Database\Factories\TeamFactory> */
    use HasFactory;

    public function members() {
        return $this->hasMany(Registration::class, 'team_id');
    }
    public function leader()
    {
        return $this->belongsTo(User::class, 'team_leader_id');
    }
    public function event() {
        return $this->belongsTo(Event::class, 'event_id');
    }
}
