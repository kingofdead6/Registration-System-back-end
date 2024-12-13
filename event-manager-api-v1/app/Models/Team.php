<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    /** @use HasFactory<\Database\Factories\TeamFactory> */
    use HasFactory;

    public function teams() {
        return $this->hasMany(Registration::class);
    }
    public function event() {
        return $this->hasOne(Event::class);
    }
}
