<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'email',
        'phone_number',
        'linkedin',
        'github',
        'other',
    ];


    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */



    public function registrations() {
        return $this->hasMany(Registration::class);
    }

    public function teamsLed()
    {
        return $this->hasMany(Team::class, 'team_leader_id');
    }
}
