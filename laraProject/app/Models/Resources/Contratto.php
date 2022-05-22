<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contratto extends Model
{
    protected $table= 'contratto';
    protected $primaryKey = 'id_contratto';
    public $timestamps = 'false';
}
