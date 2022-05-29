<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;
    protected $primaryKey = 'id_utente';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nome','cognome','user', 'email', 'password','livello','sesso','eta'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password','passsword', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function hasLevel($level){//$level sarà un array con valore 1,2 o 3 oppure 2 valori tipo 1 e 2
        $level=(array)$level;//casto a tipo array anche se ne ho solo uno in modo da usare in-array
        return in_array($this->livello, $level);//passo il livello dell'utente loggato e e il vettore che conterrà o 1 o 2 o 3 è controllo se il mio utente è 1,2 o 3
    }

}
