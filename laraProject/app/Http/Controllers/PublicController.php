<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\catalogModel;
use App\Models\Resources\Casa;
use App\Models\Resources\Utente;

class PublicController extends Controller
{
    protected $_catalogModel;
    
    public function __construct() {
        $this->_catalogModel = new catalogModel;
    }


    public function showCatalog(){

        $catalogo=$this->_catalogModel->catalogoCase();

        /* 
        $prova = new Casa;
        $prova = Casa::all(); */
       
        dd($catalogo);
    }

}
