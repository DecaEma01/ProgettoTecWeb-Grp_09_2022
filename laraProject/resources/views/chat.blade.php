
<link rel="stylesheet" type="text/css" href="{{ asset('css/global.css') }}" >
<link rel="stylesheet" type="text/css" href="{{ asset('css/chat.css') }}" >
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="{{asset('js/chat.js')}}" ></script>

<?php use Illuminate\Support\Facades\Auth ?>
@include("menu")

<div class="container large-container">
    @isset($chat)
        <h1 class="title"><?php echo $chat->id_locatario, $chat->id_locatore ?></h1>
        <div class="container-content">
        @isset($id_casa)
            {{ Form::open(array('route' => 'create-message-with-option', 'id' => 'createMessage', 'class' => 'chat-newmessage')) }}
            @csrf {{ Form::hidden('id_casa', $id_casa) }}
        @endisset()
        @empty($id_casa)
        <form action="{{ route('create-message', [$chat->id_chat]) }}" method="POST" id= "createMessage" class = "chat-newmessage">
            @if ($errors->first('text'))
                <ul class="errors">
                    @foreach ($errors->get('text') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>
                @endif

        @endempty()
            @csrf {{ Form::text('text', '', ['class' => 'input search_input','autofocus' => 'autofocus', 'placeholder' => 'Testo del messaggio', 'id' => 'chat-newtext','required'=>'required']) }}
            @csrf {{ Form::hidden('id_chat', $chat->id_chat) }}
            @csrf {{ Form::submit('ᗒ', ['class' => 'submit middable_submit search_submit', 'id' => 'chat-submit']) }}
        {{ Form::close() }}
        @isset($messages)
            @foreach ($messages as $message)
                <div class="chat-container">
                    @if(Auth::id() == $message->id_mittente)
                        <div class="chat-message" id="chat-message-me">
                    @endif
                    @if(Auth::id() != $message->id_mittente)
                        <div class="chat-message" id="chat-message-you">
                    @endif
                        {{ Form::label('', $message->testo, ['class' => 'chat-text']) }}
                        {{ Form::label('', date('Y/m/d H:i:s', $message->data_ora), ['class' => 'chat-date']) }}
                    </div> 
                </div>
            @endforeach()
            <!--Paginazione-->
            @include('paginator', ['paginator' => $messages])
        @endisset()
    @endisset()
    @empty($chat)
        {{ Form::label('', 'La chat selezionata non esiste', ['class' => 'input']) }}
    @endempty()
</div>

@include("footer")