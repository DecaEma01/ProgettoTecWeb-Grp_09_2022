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
    public function filtraCatalogo($mq,$tipo,$data_inizio,$data_fine,$citta,$regione,$AnumCamere,$AnumLetti,$Acucina,$Asoggiorno,$Pletti_camera,$Pletti_app,$Pstudio,$min,$max,$wifi,$tv,$terrazza){
        
        if($min>$max) $min=null;
        if($data_inizio>$data_fine) $data_inizio=null;
        
        //dd([$mq,$tipo,$data_inizio,$data_fine,$citta,$regione,$AnumCamere,$AnumLetti,$Acucina,$Asoggiorno,$Pletti_camera,$Pletti_app,$Pstudio,$min,$max]);
        

        $temp=new Casa;
        $temp = $temp->newQuery();

        if($mq!=null)
            $temp->where('mq','>=',$mq);

        if($tipo!=null)
            $temp->where('tipo','=',$tipo);

        if($data_inizio!=null)
            $temp->where('data_inizio','>=',$data_inizio);
        
        if($data_fine!=null)
            $temp->where('data_fine','<=',$data_fine);

        if($citta!=null)
            $temp->where(strtolower('citta'),'=',$citta);

        if($regione!=null)
            $temp->where(strtolower('regione'),'=',$regione);
                    
        if($tipo!=true and $AnumCamere!=null)
            $temp->where('AnumCamere','=',$AnumCamere);
  
        if($tipo!=true and $AnumLetti!=null)
            $temp->where('AnumLetti','=',$AnumLetti);
        
        if($tipo!=true and $Acucina!=null)
            $temp->where('Acucina','=',$Acucina);
      
        if($tipo!=true and $Asoggiorno!=null)
            $temp->where('Asoggiorno','=',$Asoggiorno);
       
        if($tipo!=false and $Pletti_camera!=null)
            $temp->where('Pletti_camera','=',$Pletti_camera);
        
        if($tipo!=false and $Pletti_app!=null)
            $temp->where('Pletti_app','=',$Pletti_app);
       
        if($tipo!=false and $Pstudio!=null)
            $temp->where('Pstudio','=',$Pstudio);
       
        if($min!=null)
            $temp->where('prezzo','>=',$min);
   
        if($max!=null)
            $temp->where('prezzo','<=',$max);
            
        if($wifi!=false)
            $temp->where('wifi','=',$wifi);
        
        if($tv!=false)
            $temp->where('tv','=',$tv);
      
        if($terrazza!=false)
            $temp->where('terrazza','=',$terrazza);    

        
      
        /*
        $temp = Casa::when($mq!=null,function ($q) use ($mq){
            return $q->where('mq','>=',$mq);

        })
        ->when($tipo!=null,function ($q) use ($tipo){
            return $q->where('tipo','=',$tipo);

        })
        ->when(($data_inizio!=null),function ($q) use ($data_inizio){
            return $q->where('data_inizio','>=',$data_inizio);
                    

        })
        ->when(($data_fine!=null),function ($q) use ($data_fine){
            return $q->where('data_fine','<=',$data_fine);

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
        ->when(($tipo!==false and $Pletti_camera!=null),function ($q) use ($Pletti_camera){
            return $q->where('Pletti_camera','=',$Pletti_camera);
                    
        })
        ->when(($tipo!==false and $Pletti_app!=null),function ($q) use ($Pletti_app){
            return $q->where('Pletti_app','=',$Pletti_app);
                    
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

        */

        //dd($temp);

        $this->catalog=$temp->get();

        return $this->getVarCatalog();
      

    }



}
