<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class newCasaRequest extends FormRequest
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
            //id casa auto increment
            
            'regione' => 'alpha|max:255|required',
            'via' => 'string|max:255|required',
            'data_inizio' => 'date|required',
            'data_fine' => 'date|required',
            'citta' => 'alpha|max:255|required',
            'titolo'=>'alpha|max:255|required',
            'descrizione'=>'string|max:2000|required',
            //'assegnata' => ['boolean','required'],
            'tipo' => 'boolean|required',
            'mq' => 'integer|min:1|required',
            'Anum_camere' =>  'integer|min:1|nullable',
            'Anum_letti' =>  'integer|min:1|nullable',
            'Acucina' => 'boolean|nullable',
            'Asoggiorno' =>  'boolean|nullable',
            'Pletti_camera' => 'integer|min:1|nullable',
            'Pletti_app' => 'integer|min:1|nullable',
            'Pstudio' =>  'boolean|nullable',
            'prezzo' => 'integer|min:1|max:1000|required',
            'wifi' => 'boolean|nullable',
            'tv' => 'boolean|nullable',
            'terrazza' => 'boolean|nullable',
            'eta_min' => 'integer|min:18|max:100|nullable',
            'eta_max' => 'integer|min:18|max:100|nullable',
            'sesso' => 'string|nullable',
            'foto' => 'image|nullable',
            //'id_locatore'=> 'integer|required',
        ];
    }
}
