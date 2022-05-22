<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    public $timestamps = false;
    use Notifiable;
    
    protected $fillable = [
        'Email', 'password', 'Imie', 'NumerTelefonu', 'Miasto','Ulica','NumerMieszkania','Pesel',
    ];
    
    protected $hidden = [
        'password',
    ];
    
    public function setPasswordAttribute($password)
    {
        $this->attributes['password'] = bcrypt($password);
    }
}