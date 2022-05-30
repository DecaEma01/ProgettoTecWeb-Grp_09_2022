<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class filtraCatalogoRequest extends FormRequest
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
            'mq' => ['integer','max:1000','nullable'],
            'tipo' => ['boolean','nullable'],
            'data_inizio' => ['string', 'date','nullable'],
            'data_fine' => ['string', 'date','nullable'],
            'citta' => [ 'string','max:255','nullable'],
            'regione' => [ 'string','max:255','nullable'],
            'Anum_camere' => [ 'integer','min:1','nullable'],
            'Anum_letti' => [ 'integer', 'min:1','nullable'],
            'Acucina' => ['boolean','nullable'],
            'Asoggiorno' => [ 'boolean','nullable'],
            'Pletti_camera' => ['integer','min:1','nullable'],
            'Pletti_app' => ['integer','min:1','nullable'],
            'Pstudio' => ['boolean','nullable'],
            'min' => ['integer','min:1','nullable'],
            'max' => ['integer','max:1000','nullable'],
            
        ];
    }
}
