<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Resources\Casa;
use App\Models\Resources\Utente;

class catalogModel extends Model
{

    protected $catalog;
    


    public function __construct() {
        $this->catalog = new Casa;
    }

    public function getVarCatalog() {
        return $this->catalog;
    }


    public function getCatalogoCase(){
       
        return Casa::all();

    }

    // se tipo = true allora la casa è un'appartamento altrimenti è un posto letto
    //le città e le regioni nel db sono salvate tutte minuscole
    //le condizioni che iniziano con A sono relative ai solo appartamenti mentre quelli che iniziano con P ai soli posti letto
    public function filtraCatalogo($mq,$tipo,$data_inizio,$data_fine,$citta,$regione,$AnumCamere,$AnumLetti,$Acucina,$Asoggiorno,$PnumLettiCam,$PnumLettiApp,$Pstudio,$min,$max){
        
        if($min>$max) $min=null;
        if($data_inizio>$data_fine) $data_inizio=null;
        
        $temp=new Casa;
        $temp = Casa::when($mq!=null,function ($q) use ($mq){
            return $q->where('mq','>=',$mq);

        })
        ->when($tipo!=null,function ($q) use ($tipo){
            return $q->where('tipo','=',$tipo);

        })
        ->when(($data_inizio!=null),function ($q) use ($data_inizio){
            return $q->where('data_inizio','<=',$data_inizio);
                    

        })
        ->when(($data_fine!=null),function ($q) use ($data_fine){
            return $q->where('data_fine','>=',$data_fine);

        })
        ->when($citta!=null,function ($q) use ($citta){
            return $q->where(strtolower('citta'),'=',$citta);

        })
        ->when(($regione!=null),function ($q) use ($regione){
            return $q->where(strtolower('regione'),'=',$regione);
                    
        })
        ->when(($tipo!==true and $AnumCamere!=null),function ($q) use ($AnumCamere){
            return $q->where('AnumCamere','=',$AnumCamere);
                    
        })
        ->when(($tipo!==true and $AnumLetti!=null),function ($q) use ($AnumLetti){
            return $q->where('AnumLetti','=',$AnumLetti);
                    
        })
        ->when(($tipo!==true and $Acucina!=null),function ($q) use ($Acucina){
            return $q->where('Acucina','=',$Acucina);
                    
        })
        ->when(($tipo!==true and $Asoggiorno!=null),function ($q) use ($Asoggiorno){
            return $q->where('Asoggiorno','=',$Asoggiorno);
                    
        })
        ->when(($tipo!==false and $PnumLettiCam!=null),function ($q) use ($PnumLettiCam){
            return $q->where('Pletti_camera','=',$PnumLettiCam);
                    
        })
        ->when(($tipo!==false and $PnumLettiApp!=null),function ($q) use ($PnumLettiApp){
            return $q->where('Pletti_app','=',$PnumLettiApp);
                    
        })
        ->when(($tipo!==false and $Pstudio!=null),function ($q) use ($Pstudio){
            return $q->where('Pstudio','=',$Pstudio);
                    
        })
        ->when(($min!=null),function ($q) use ($min){
            return $q->where('prezzo','>=',$min);
     
        })
        ->when(($max!=null),function ($q) use ($max){
            return $q->where('prezzo','<=',$max);

        })
        
        ->get();

        $this->catalog=$temp;

        return $this->getVarCatalog();
      

    }




        /*
        $results = ClientProfile::when(request()->has('service-provider'), function($q){
            $q->where('jobsc_id', request('service-provider'));
        })->when(request()->has('product'), function($q){
            $q->where('product_id', request('product'));
        })->when(request()->has('city'), function($q){
            $q->where('divsec_id', request('city'));
        })->when(count(request()->all()) === 0, function($q){
            $q->searched();
        })->where('profile_state', 'active')->paginate(10)->appends([
            'service-provider' => request('service-provider'),
            'product' => request('product'),
            'city' => request('city'),
        ]);
        
        */

          

        
        
        /*$catalogo = Casa::when($mq!=null,function ($mq) use ($temp) {
            $temp= Casa::where('mq', $mq)->get();
        })
        ->
        ->get();
        */
        
        // $this->catalog=$temp;

       // return getCatalog();

               /*$this->casa =
        $results = User::where('this', '=', 1)
    ->where('that', '=', 1)
    ->where('this_too', '=', 1)
    ->where('that_too', '=', 1)
    ->where('this_as_well', '=', 1)
    ->where('that_as_well', '=', 1)
    ->where('this_one_too', '=', 1)
    ->where('that_one_too', '=', 1)
    ->where('this_one_as_well', '=', 1)
    ->where('that_one_as_well', '=', 1)
    ->get();*/






}
