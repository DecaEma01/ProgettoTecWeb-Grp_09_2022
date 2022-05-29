<?php

namespace App\Http\Controllers;

use App\Models\FaqModel;
use Illuminate\Http\Request;

class IndexController extends Controller {

    protected $_faqModel;

    public function __construct() {
        $this->_faqModel = new FaqModel;
    }

    public function getIndex(){
        $faqs=$this->_faqModel->getAll();
        return view('index')->with('faqs', $faqs);
    }





}
