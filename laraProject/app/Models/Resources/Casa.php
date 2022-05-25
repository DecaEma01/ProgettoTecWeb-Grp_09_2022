<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Casa extends Model
{
    protected $table= 'casa';
    protected $primaryKey = 'id_casa';
    public $timestamps = false;
}
