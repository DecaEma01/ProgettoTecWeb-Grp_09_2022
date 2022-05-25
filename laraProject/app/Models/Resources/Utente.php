<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Utente extends Model
{
    protected $table= 'utente';
    protected $primaryKey = 'id_utente';
    public $timestamps = false;
}
