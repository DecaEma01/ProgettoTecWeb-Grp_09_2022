<?php

namespace App\Models\Resources;

use Illuminate\Database\Eloquent\Model;

class Casa extends Model
{
    protected $table= 'casa';
    protected $primaryKey = 'id_casa';
    public $timestamps = false;

    
    protected $guarded = ['id_casa'];
    protected $fillable = [
        'titolo',
        'descrizione',
        'regione',	
        'via',	
        'citta',	
        'data_inizio',	
        'data_fine',	
        'assegnata',	
        'tipo',	
        'prezzo',	
        'mq',	
        'wifi',	
        'tv',	
        'terrazza',	
        'piano',	
        'arredato',	
        'eta_min',	
        'eta_max',
        'sesso',	
        'foto',	
        'Anum_camere',	
        'Anum_letti',	
        'Acucina',	
        'Asoggiorno',	
        'Pletti_camera',	
        'Pletti_app',	
        'Pstudio',	
        'id_locatore'];

 


       
}

