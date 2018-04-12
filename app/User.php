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

}
