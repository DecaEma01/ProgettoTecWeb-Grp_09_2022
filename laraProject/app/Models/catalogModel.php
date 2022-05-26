<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Resources\Casa;
use App\Models\Resources\Utente;

class catalogModel extends Model
{


    public function catalogoCase(){
       
        return Casa::all();

    }

    public function trovaCasa($id){
         //da testare         
        return Casa::find($id);
        
    }

    //public function filtr
}
