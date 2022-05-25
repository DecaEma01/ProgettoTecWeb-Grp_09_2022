<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Opzionamento extends Model
{
    protected $table= 'opzionamento';
    protected $primaryKey = 'id_opz';
    public $timestamps = false;
}
