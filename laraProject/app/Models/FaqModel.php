<?php

namespace App\Models;

use App\Models\Resources\Faq;

class FaqModel {

    public function getFaqById($id_faq) {
        return Faq::findOrFail($id_faq);
    }
    public function getAll(){
        return Faq::all();
    }
    public function remove($id_faq){
        return Faq::destroy($id_faq);
    }
    public function insert($faq) {
        return Faq::create($faq);
    }

    public function update($faq) {
        $storedFaq = Faq::findOrFail($faq -> id_faq);
        $storedFaq -> domanda = $faq -> domanda;
        $storedFaq -> risposta = $faq -> risposta;
        $storedFaq -> save();
        return $storedFaq;
    }
}