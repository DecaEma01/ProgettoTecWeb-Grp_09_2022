<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Auth;
//use App\Http\Requests;


use App\Models\catalogModel;
use App\Models\houseModel;
use App\Models\Resources\Casa;
use App\Models\Resources\Utente;

//use Carbon\Carbon;

use App\Http\Requests\filtraCatalogoRequest;
use App\Http\Requests\modificaCasaRequest;
use App\Http\Requests\newCasaRequestRequest;

class PublicController extends Controller
{
    protected $_catalogModel;
    protected $_houseModel;

    protected $listaCase;
    protected $caseLocatore;
    protected $casaLocatore;
   
    
    public function __construct() {
        $this->_catalogModel = new catalogModel;
        $this->_houseModel = new houseModel;
        $this->listaCase = new Casa;
      
    }


    public function showCatalog(){

        $this->listaCase=$this->_catalogModel->getCatalogoCase();

        //dd($catalogo);
        return view('catalog')->with('listaCase',$this->listaCase);
    }

        
    
    //questa roba è solo per locatore e locatario
    public function filtraCatalogo(filtraCatalogoRequest $request){

        //filtraCatalogoRequest
        //la data del test è il 28 maggio 2020 e 2022
        //test
        //$catalogo=$this->_catalogModel->filtraCatalogo(90,true,1590616800,1653688800,'Termoli','Molise',3,3,true,true,4,4,false,100,300);
        //dd($catalogo);
        //dd($request);


        $mq = $request -> input('mq');

        if($request-> input('tipo') == '0')
        $tipo=null;
        if($request-> input('tipo') == '1')
        $tipo=true;
        if($request-> input('tipo') == '2')
        $tipo=false;
      
        //$tipo = $request -> input('tipo');
        $data_inizio = strtotime($request -> input('data_inizio'));
        //dd($data_inizio);
        $data_fine = strtotime($request -> input('data_fine'));
        $citta = $request -> input('citta');
        $regione = $request -> input('regione');
        $Anum_camere = $request -> input('Anum_camere');
        $Anum_letti = $request -> input('Anum_letti');
        $Acucina = $request -> input('Acucina');
        $Asoggiorno = $request -> input('Asoggiorno');
        $Pletti_camera = $request -> input('Pletti_camera');
        $Pletti_app = $request -> input('Pletti_app');
        $Pstudio = $request -> input('Pstudio');
        $min = $request -> input('min');
        $max = $request -> input('max');
        $wifi = $request -> input('wifi');
        $tv = $request -> input('tv');
        $terrazza = $request -> input('terrazza');

        $this->listaCase=$this->_catalogModel->filtraCatalogo($mq,$tipo,$data_inizio,$data_fine,$citta,$regione,$Anum_camere,$Anum_letti,$Acucina,$Asoggiorno,$Pletti_camera,$Pletti_app,$Pstudio,$min,$max,$wifi,$tv,$terrazza);
       
        //dd($this->listaCase);

        return view('catalog')->with('listaCase',$this->listaCase);
    


    }


    public function addCasa(newCasaRequest $request){

        $request->validate();

        $newImgName=$this->$_houseModel->salvaSpostaNewImg($request,($request->input('foto')));

        $titolo = $request -> input('titolo');	
        $descrizione= $request -> input('descrizione');		
        $regione = $request -> input('regione');	
        $via= $request -> input('via');	
        $citta= $request -> input('citta');	
        $data_inizio= $request -> input('data_inizio');		
        $data_fine= $request -> input('data_fine');		
        $tipo= $request -> input('tipo');		
        $prezzo= $request -> input('prezzo');		
        $mq= $request -> input('mq');		
        $wifi= $request -> input('wifi');		
        $tv= $request -> input('tv');		
        $terrazza= $request -> input('terrazza');		
        $piano= $request -> input('piano');		
        $arredato= $request -> input('arredato');		
        $eta_min= $request -> input('eta_min');		
        $eta_max= $request -> input('eta_max');		
        $sesso= $request -> input('sesso');		
        //$foto= $request -> input('foto');		
        $Anum_camere= $request -> input('Anum_camere');		
        $Anum_letti= $request -> input('Anum_letti');	
        $Acucina= $request -> input('Acucina');		
        $Asoggiorno= $request -> input('Asoggiorno');	
        $Pletti_camera= $request -> input('Pletti_camera');		
        $Pletti_app= $request -> input('Pletti_app');		
        $Pstudio= $request -> input('Pstudio');		
        $id_locatore= Auth::id();	   //mi serve dalla sessione
        


        //$casaFoto=inserisciCasa(attributiVari....datepassate come stringhe......,newImgName,.... );
        $casaFoto=$this->$_houseModel->inserisciCasa($titolo,$descrizione,$regione,$via,$citta,$data_inizio,$data_fine,$tipo,$prezzo,$mq,$wifi,$tv,$terrazza,$piano,$arredato,$eta_min,$eta_max,$sesso,$newImageName,$Anum_camere,$Anum_letti,$Acucina,$Asoggiorno,$Pletti_camera,$Pletti_app,$Pstudio,$id_locatore);
        
        return view('home'); // magari una vista per dire inserimento eseguito con successo
   
        /*
        questa roba non serve
        $casaFoto=$this->$_houseModel->trovaCasa($id);
        $casaFoto->update(['foto'=*newImgName])

        */
    }

    public function updateCasa(modificaCasaRequest $request){

        $request->validate();

        $newImgName=$this->$_houseModel->salvaSpostaNewImg($request,($request->input('foto')));

        $id=$request -> input('id');
        $titolo = $request -> input('titolo');	
        $descrizione= $request -> input('descrizione');	  //id casa hidden
        $regione = $request -> input('regione');	
        $via= $request -> input('via');	
        $citta= $request -> input('citta');	
        $data_inizio= $request -> input('data_inizio');		
        $data_fine= $request -> input('data_fine');
        $assegnata= $request -> input('assegnata');			
        $tipo= $request -> input('tipo');		
        $prezzo= $request -> input('prezzo');		
        $mq= $request -> input('mq');		
        $wifi= $request -> input('wifi');		
        $tv= $request -> input('tv');		
        $terrazza= $request -> input('terrazza');		
        $piano= $request -> input('piano');		
        $arredato= $request -> input('arredato');		
        $eta_min= $request -> input('eta_min');		
        $eta_max= $request -> input('eta_max');		
        $sesso= $request -> input('sesso');		
        //$foto= $request -> input('foto');		
        $Anum_camere= $request -> input('Anum_camere');		
        $Anum_letti= $request -> input('Anum_letti');	
        $Acucina= $request -> input('Acucina');		
        $Asoggiorno= $request -> input('Asoggiorno');	
        $Pletti_camera= $request -> input('Pletti_camera');		
        $Pletti_app= $request -> input('Pletti_app');		
        $Pstudio= $request -> input('Pstudio');	
        
        //$casaFoto=inserisciCasa(attributiVari....datepassate come stringhe......,newImgName,.... );
        $casaFoto=$this->$_houseModel->modificaCasa($id,$titolo,$descrizione,$regione,$via,$citta,$data_inizio,$data_fine,$tipo,$prezzo,$mq,$wifi,$tv,$terrazza,$piano,$arredato,$eta_min,$eta_max,$sesso,$newImageName,$Anum_camere,$Anum_letti,$Acucina,$Asoggiorno,$Pletti_camera,$Pletti_app,$Pstudio);
        
        return view('home'); // magari una vista per dire inserimento eseguito con successo

      
    }

    public function vedilistaCaseLocatore(){
        $id_locatore= Auth::id();
        $this->$caseLocatore=$this->$_houseModel->trovaCaseLocatore($id_locatore);
        return view('listaCaseLocatore')->with('listaCaseLocatore',$this->$caseLocatore);

    }


    /*
    public function vediCasaLocatore(Request $request){
        
        $id=$request -> input('id'); //id casa

        return view('showCasaLocatore')->with('casaLocatore',($this->$_houseModel->trovaCasa($id)));

    }
    */
   
    public function vediCasaCatalogo(Request $request){

        $id=$request -> input('id');

        return view('showCasaCatalog')->with('casa',($this->$_houseModel->trovaCasa($id)));

    }


    public function eliminaCasa(Request $request){

        $id=$request -> input('id');
        $this->$_houseModel->eliminaCasa($id);
        
        return view('home'); // magari una vista per dire eliminazione eseguito con successo



    }


}
