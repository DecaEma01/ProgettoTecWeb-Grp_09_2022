<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class modificaCasaRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'regione' => ['string','max:255','required'],
            'via' => ['string','max:255','required'],
            'data_inizio' => ['string', 'date','required'],
            'data_fine' => ['string', 'date','required'],
            'citta' => ['string','max:255','required'],
            'assegnata' => ['boolean','required'],
            'tipo' => ['boolean','nullable'],
            'mq' => ['integer','min:1','required'],
            'regione' => [ 'string','max:255','required'],
            'Anum_camere' => [ 'integer','min:1','required'],
            'Anum_letti' => [ 'integer', 'min:1','required'],
            'Acucina' => ['boolean','required'],
            'Asoggiorno' => [ 'boolean','required'],
            'Pletti_camera' => ['integer','min:1','required'],
            'Pletti_app' => ['integer','min:1','required'],
            'Pstudio' => [ 'boolean','required'],
            'prezzo' => ['integer','min:1','max:1000','required'],
            'wifi' => ['boolean','required'],
            'tv' => ['boolean','required'],
            'terrazza' => ['boolean','required'],
            'eta_min' => ['integer','min:18','max:100','required'],
            'eta_max' => ['integer','min:18','max:100','required'],
            'sesso' => ['integer','in:0,1','required'],
            'foto' => ['image','required'],
            
        ];
    }
}
