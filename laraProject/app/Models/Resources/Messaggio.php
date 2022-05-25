<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Messaggio extends Model
{
    protected $table= 'messaggio';
    protected $primaryKey = 'id_messaggio';
    public $timestamps = false;
}
