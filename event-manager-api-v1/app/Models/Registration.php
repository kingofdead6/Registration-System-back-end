<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Registration extends Model
{
    /** @use HasFactory<\Database\Factories\RegistrationFactory> */
    use HasFactory;

    public function user() {
        return $this->hasOne(User::class);
    }
    public function team() {
        return $this->hasOne(Team::class);
    }
    public function event() {
        return $this->hasOne(Event::class);
    }
}
