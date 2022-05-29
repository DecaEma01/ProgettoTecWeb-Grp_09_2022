<?php

namespace App\Models;

use App\Models\Resources\Chat;
use App\Models\Resources\Messaggio;

class ChatsModel {

    public function getChats($uid){
        return Chat::where('id_locatore', $uid)->orWhere('id_locatario', $uid)->get();
    }

    public function getChatById($id_chat) {
        return Chat::where('id_chat', $id_chat)->first();
    }
}