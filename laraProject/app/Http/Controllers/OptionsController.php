<?php

namespace App\Http\Controllers;

use App\Models\Resources\Opzionamento;
use App\Models\OptionsModel;

class OptionsController extends Controller{

    protected $_optionsModel;

    public function __construct() {
        $this->_optionsModel = new OptionsModel;
    }

    public function getOptions($id_casa){
        return Opzionamento::where('id_casa', $id_casa)->get();
    }

    public function showOptions($id_casa){
        $options = $this->_optionsModel->getOptions($id_casa);
        return view('options')->with('options', $options);
    }
}