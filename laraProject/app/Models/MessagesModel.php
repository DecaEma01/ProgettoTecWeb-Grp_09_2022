<?php

namespace App\Models;

use App\Models\Resources\Messaggio;

class MessagesModel {

    public function getMessagesByChatId($id_chat) {
        return Messaggio::where('id_chat', $id_chat)->orderBy('data_ora', 'DESC')->paginate(10);
    }

    public function getLastMessageByChatId($id_chat){
        return Messaggio::where('id_chat', $id_chat)->orderBy('data_ora', 'DESC')->first();
    }

}