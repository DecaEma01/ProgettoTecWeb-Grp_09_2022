<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use App\Http\Requests;


use App\Models\catalogModel;
use App\Models\housegModel;
use App\Models\Resources\Casa;
use App\Models\Resources\Utente;
//use Carbon\Carbon;

class PublicController extends Controller
{
    protected $_catalogModel;
    protected $_houseModel;
   
    
    public function __construct() {
        $this->_catalogModel = new catalogModel;
        $this->_houseModel = new houseModel;
      
    }


    public function showCatalog(){

        $catalogo=$this->_catalogModel->getCatalogoCase();

        dd($catalogo);
    }

    public function filtraCatalogo(/*form request*/){

        //la data è il 28 maggio 2020 e 2022
        //test
        $catalogo=$this->_catalogModel->filtraCatalogo(90,true,1590616800,1653688800,'Termoli','Molise',3,3,true,true,4,4,false,100,300);
        
        dd($catalogo);


    }

    //questa roba va nel locatore controller
    public function inserisciCasa(/*Request*/){

        //estrazione dati dalla request
        /*
        newImgName=$this->$_houseModel->salvaSpostaNewImg($request,$formImgName);
        $casaFoto=inserisciCasa(attributiVari....datepassate come stringhe......,newImgName,.... );
        
        
        
        questa roba non serve
        $casaFoto=$this->$_houseModel->trovaCasa($id);
        $casaFoto->update(['foto'=*newImgName])




        */
    }

    public function updateCasa(/*Request*/){

        //estrazione dati dalla request
        /*
        newImgName=$this->$_houseModel->salvaSpostaNewImg($request,$formImgName);
        $casaFoto=modificaCasa(attributiVari....datepassate come stringhe......,newImgName,.... );
        
        
        
        questa roba non serve
        $casaFoto=$this->$_houseModel->trovaCasa($id);
        $casaFoto->update(['foto'=*newImgName])




        */
    }


}
