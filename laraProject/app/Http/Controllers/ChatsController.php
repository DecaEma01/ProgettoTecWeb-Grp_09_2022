<?php

namespace App\Http\Controllers;

use App\Models\ChatsModel;
use App\Models\MessagesModel;
use App\Models\Resources\Messaggio;
use App\Models\Resources\Opzionamento;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ChatsController extends Controller {

    protected $_chatsModel;
    protected $_messagesModel;
    
    public function __construct() {
        $this->_chatsModel = new ChatsModel;
        $this->_messagesModel = new MessagesModel;
    }

    public function showChats(){
        $uid = Auth::id(); 
        $chats = $this->_chatsModel->getChats($uid);
        foreach($chats as $chat){
            $message = $this->_messagesModel->getLastMessageByChatId($chat->id_chat);
            $chat->message = $message;
        }
        return view('previews')->with('chats', $chats);
    }

    public function showChat($id_chat){
        $chat = $this->_chatsModel->getChatById($id_chat);
        $messages = $this->_messagesModel->getMessagesByChatId($id_chat);
        //return view('chat')->with('chat', $chat)->with('messages', $messages);
        return view('chat' , [$id_chat])->with('chat', $chat)->with('messages', $messages);
       
    }

    public function showChatWithOption($id_chat, $id_casa){
        $chat = $this->_chatsModel->getChatById($id_chat);
        $messages = $this->_messagesModel->getMessagesByChatId($id_chat);
        return view('chat')->with('chat', $chat)->with('messages', $messages)->with("id_casa", $id_casa);
    }

    public function createMessage(Request $request){
        $request->validate([
            'text' => ['required', 'string', 'max:255'],
            ]);
        $message = new Messaggio;
        $message->data_ora = strtotime("now");
        $message->testo = trim($request->input('text'));
        $message->id_mittente = Auth::id();
        $message->id_chat = $request->input('id_chat');
        $message->save();
        return $this->showChat($message->id_chat);
    }

    public function createMessageWithOption(Request $request){
        $option = new Opzionamento;
        $option->data_opz = strtotime("now");
        $option->id_casa = $request->input('id_casa');
        $option->id_locatario = Auth::id();
        $option->id_chat = $request->input('id_chat');
        $option->save();
        return $this->createMessage($request);
    }

}