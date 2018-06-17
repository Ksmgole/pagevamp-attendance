<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'firstname','lastname', 'email', 'password', 'is_admin'
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];
    protected $table = 'users';


    public function attendance()
    {
        return $this->hasMany(Attendance::class);
    }

    public function takeAttendance()
    {
        return $this->attendance()->create([
            'entry_time' => date('Y-m-d H:i:s'),
            'date' => date('Y-m-d'),
        ]);
    }

}
