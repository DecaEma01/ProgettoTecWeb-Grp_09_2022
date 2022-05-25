<?php

namespace App\Models;

use App\Models\Resources\Faq;

class FaqModel {

    public function getFaqById($id_faq) {
        return Faq::where('id_faq', $id_faq)->get();
    }
}