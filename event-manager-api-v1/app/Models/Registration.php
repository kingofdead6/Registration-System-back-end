<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Registration extends Model
{
    /** @use HasFactory<\Database\Factories\RegistrationFactory> */
    use HasFactory;

    public function user() {
        return $this->belongsTo(User::class);
    }
    public function team() {
        return $this->belongsTo(Team::class);
    }
    public function event() {
        return $this->belongsTo(Event::class);
    }
}
