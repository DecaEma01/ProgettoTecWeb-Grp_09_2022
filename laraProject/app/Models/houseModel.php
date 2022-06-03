<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Resources\Casa;
use App\Models\Resources\Utente;

// dd(Carbon::now()->timestamp);
//dd(strtotime('19-08-2022'));

class houseModel extends Model
{
    protected $newImgName;
    protected $house;
    protected $listaCaseLocatore;

    public function __construct() {
        $this->house = new Casa;
    }

    public function getVarHouse() {
        return $this->house;
    }

    public function getNewImgName() {
        return $this->house;
    }

    public function getListaCaseLocatore() {
        return $this->$listaCaseLocatore;
    }


    public function trovaCasa($id){        
       return Casa::find($id);
       
   }

   /*
   public function trovaCaseLocatore($id_locatore){
      
    $this->$listaCaseLocatore= Casa::where('id_locatore',$id_locatore)->get();
    return $this->getListaCaseLocatore;

      
   }*/

   public function getMyHouses(){
        if (Auth::id() != null){
            $uid = Auth::id();
            $this->_housesModel = Casa::where('id_locatore', $uid)->get();
            if (count($this->_housesModel) > 0){
                return view('myhouses')->with('myhouses', $this->_housesModel);
            }else{
                return null;
            }
        }else{
            return view('noperm');
        }
    }


   /*
   public function trovaCasaLocatore($id_locatore){
      
    $this->$listaCaseLocatore= Casa::where('id_locatore',$id_locatore)->get();
    return $this->getListaCaseLocatore;

      
   }
   */


   public function salvaSpostaNewImg($request,$formImgName) {

       $this->$newImgName=time().'-'."random_int(1,1000000)".$request->formImgName.'.'.$request->formImgName->extension();
       $request->input('foto')->move(public_path('images'),$newImgName);
       return  $this->$newImgName;
       //il nome va comunque salvato nel database

   }

   //public function stringToUnix


   public function inserisciCasa(
    $titolo,
    $descrizione,
   $regione,	
   $via,	
   $citta,	
   $data_inizio,	
   $data_fine,	
   $tipo,	
   $prezzo,	
   $mq,	
   $wifi,	
   $tv,	
   $terrazza,		
   $eta_min,	
   $eta_max,	
   $sesso,	
   $foto,	
   $Anum_camere,	
   $Anum_letti,
   $Acucina,	
   $Asoggiorno,
   $Pletti_camera,	
   $Pletti_app,	
   $Pstudio,	
   $id_locatore){
       
       $miaCasa=new Casa;
       $miaCasa::Create([
      
       //$miaCasa->nomeAttributo=valoreAttributo
       'titolo'=> $titolo,
       'descrizione'=> $descrizione,
       'regione'=> $regione,
       'via'=> $via,
       'citta'=> $citta,
       'titolo'=>$titolo,
       'descrizione'=>$descrizione,
       'data_inizio'=>$data_inizio,	
       'data_fine'=> $data_fine,	
       'assegnata'=> false,	
       'tipo'=> $tipo,
       'prezzo'=> $prezzo,	
       'mq'=> $mq,	
       'wifi'=> $wifi,	
       'tv'=> $tv,	
       'terrazza'=> $terrazza,		
       'eta_min'=> $eta_min,	
       'eta_max'=> $eta_max,
       'sesso'=> $sesso,	
       'foto'=> $foto,
       'Anum_camere'=> $Anum_camere,	
       'Anum_letti'=> $Anum_letti,	
       'Acucina'=> $Acucina,
       'Asoggiorno'=> $Asoggiorno,	
       'Pletti_camera'=> $Pletti_camera,
       'Pletti_app'=> $Pletti_app,	
       'Pstudio'=> $Pstudio,	
       'id_locatore'=> $id_locatore
       ]);

   }





   public function modificaCasa(	
   $id,
   $titolo,
   $descrizione, 
   $regione,	
   $via,	
   $citta,	
   $data_inizio,	
   $data_fine,	
   $assegnata,
   $tipo,	
   $prezzo,	
   $mq,	
   $wifi,	
   $tv,	
   $terrazza,	
   $piano,	
   $arredato,	
   $eta_min,	
   $eta_max,	
   $sesso,	
   $foto,	
   $Anum_camere,	
   $Anum_letti,
   $Acucina,	
   $Asoggiorno,
   $Pletti_camera,	
   $Pletti_app,	
   $Pstudio){
       
       $miaCasa=new Casa;
       $miaCasa=trovaCasa($id)->update([

      'titolo'=> $titolo,
      'descrizione'=> $descrizione,
      'regione'=> $regione,
      'via'=> $via,
      'citta'=> $citta,
      'titolo'=>$titolo,
      'descrizione'=>$descrizione,
      'data_inizio'=> strtotime($data_inizio),	
      'data_fine'=> strtotime($data_fine),	
      'assegnata'=> $assegnata,	
      'tipo'=> $tipo,
      'prezzo'=> $prezzo,	
      'mq'=> $mq,	
      'wifi'=> $wifi,	
      'tv'=> $tv,	
      'terrazza'=> $terrazza,		
      'eta_min'=> $eta_min,	
      'eta_max'=> $eta_max,
      'sesso'=> $sesso,	
      'foto'=> $foto,
      'Anum_camere'=> $Anum_camere,	
      'Anum_letti'=> $Anum_letti,	
      'Acucina'=> $Acucina,
      'Asoggiorno'=> $Asoggiorno,	
      'Pletti_camera'=> $Pletti_camera,
      'Pletti_app'=> $Pletti_app,	
      'Pstudio'=> $Pstudio
      
      ]);
      
       /*$miaCasa->nomeAttributo=valoreAttributo
       $miaCasa->regione= $regione;
       $miaCasa->via= $via;
       $miaCasa->citta= $citta;	
       $miaCasa->data_inizio= $data_inizio;	
       $miaCasa->data_fine= $data_fine;	
       $miaCasa->assegnata= $assegnata;	
       $miaCasa->tipo= $tipo;
       $miaCasa->prezzo= $prezzo;	
       $miaCasa->mq= $mq;	
       $miaCasa->wifi= $wifi;	
       $miaCasa->tv= $tv;	
       $miaCasa->terrazza= $terrazza;		
       $miaCasa->eta_min= $eta_min;	
       $miaCasa->eta_max= $eta_max;
       $miaCasa->sesso= $sesso;	
       $miaCasa->foto= $foto;
       $miaCasa->Anum_camere= $Anum_camere;	
       $miaCasa->Anum_letti= $Anum_letti;	
       $miaCasa->Acucina= $Acucina;	
       $miaCasa->Asoggiorno= $Asoggiorno;	
       $miaCasa->Pletti_camera= $Pletti_camera;	
       $miaCasa->Pletti_app= $Pletti_app;	
       $miaCasa->Pstudio= $Pstudio;	
       $miaCasa->save();
       */

   }




   public function eliminaCasa($id){

       Casa::destroy($id);

   }



}
