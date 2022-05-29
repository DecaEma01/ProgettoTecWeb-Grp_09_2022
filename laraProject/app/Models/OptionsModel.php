<?php

namespace App\Models;

use App\Models\Resources\Opzionamento;

class OptionsModel {

    public function getOptions($id_casa){
        return Opzionamento::where('id_casa', $id_casa)->get();
    }

    public function getOptionById($id_opz) {
        return Opzionamento::where('id_opz', $id_opz)->first();
    }
}