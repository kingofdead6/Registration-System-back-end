<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Registration extends Model
{
    /** @use HasFactory<\Database\Factories\RegistrationFactory> */
    use HasFactory;

    public function user() {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function team() {
        return $this->belongsTo(Team::class, 'team_id');
    }
    public function event() {
        return $this->belongsTo(Event::class, 'event_id');
    }
}
