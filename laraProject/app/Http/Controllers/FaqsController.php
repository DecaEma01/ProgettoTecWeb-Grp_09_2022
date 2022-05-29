<?php

namespace App\Http\Controllers;

use \stdClass;
use App\Models\FaqModel;
use App\Models\Resources\Faq;
use Illuminate\Http\Request;

class FaqsController extends Controller {

    protected $_faqModel;

    public function __construct() {
        $this->_faqModel = new FaqModel;
    }

    public function create(){
        $this->data['mode'] = 'create';
        return view('faq', $this->data);
    }

    public function showFaq($id_faq){
        $faq = $this->_faqModel->getFaqById($id_faq);
        if($faq!=null){
            return view('faq')
                ->with('faq', $faq)
                ->with('mode', 'edit');
        }else{
            return view('faq');
        }
    }

    public function list(){
        $faqs=$this->_faqModel->getAll();
        return view('faqs')->with('faqs', $faqs);

    }

    public function updateFaq(Request $request) {
        $faq = new stdClass();
        $faq -> domanda = $request -> input('domanda');
        $faq -> risposta = $request -> input('risposta');
        $faq -> id_faq = $request -> input('id_faq');
        $this->_faqModel->update($faq);
        return redirect('/faqs');
    }

    public function insertFaq(Request $request){
        $faq = new stdClass();
        $faq -> domanda = $request -> input('domanda');
        $faq -> risposta = $request -> input('risposta');
        $faq -> id_faq = $request -> input('id_faq');
        $faq = $this->_faqModel->insert($request->all());
        return redirect('/faqs');
    }

    public function deleteFaq(Request $request){
        $this->_faqModel->remove($request->input('id_faq'));
        return redirect('/faqs');
    }

}
