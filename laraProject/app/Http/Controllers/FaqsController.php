<?php

namespace App\Http\Controllers;

use App\Models\FaqModel;
use App\Models\Resources\Faq;
use Illuminate\Http\Request;

class FaqsController extends Controller {

    protected $_faqModel;
    
    public function __construct() {
        $this->_faqModel = new FaqModel;
    }

    public function showFaq($id_faq){
        $faq = $this->_faqModel->getFaqById($id_faq);
        if($faq!=null){
            return view('faq')->with('faq', $faq);
        }else{
            return view('faq');
        }
        
    }


    public function updateFaq(Request $request){
        //$request->validated();
        
        $faq = Faq::where('id_faq', $request->input('id'))
                ->update([
                    'domanda' => $request->input('question'),
                    'risposta' => $request->input('answer')
                ]);


        return redirect('/faqs');
    }

}