<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
<<<<<<< HEAD
        'firstname','lastname', 'email', 'password', 'is_admin'
=======
        'first_name' ,
        'last_name' ,
        'phone' ,
        'is_admin' ,
        'citizenship_number' ,
        'bank_account',
        'email',
        'password',
        'verification_key',
        'verification_expiration_date',

>>>>>>> 93ca9ebc8d40186bd7c5a43e27cb730f0f8d4add
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
