<link rel="stylesheet" type="text/css" href="{{ asset('css/global.css') }}" >
<link rel="stylesheet" type="text/css" href="{{ asset('css/previews.css') }}" >

@include("menu")

<div class="container large-container">
    <div class="title">Anteprime</div>
    <div class="container-content">
        @isset($chats)
            @foreach ($chats as $chat)
                <a href="<?php echo "chat/" .$chat->id_chat; ?>" class="preview-container">
                    {{ Form::label('', $chat->id_locatario, ['class' => 'preview-title']) }}
                    @isset($chat->message)
                        {{ Form::label('', $chat->message->testo, ['class' => 'preview-message']) }}
                        {{ Form::label('', date('Y/m/d H:i:s', $chat->message->data_ora), ['class' => 'preview-date']) }}
                    @endisset()
                    @empty($chat->message)
                        {{ Form::label('', 'Ancora nessun messaggio', ['class' => 'preview-message']) }}
                    @endempty()
                </a>
            @endforeach()
    </div>
    @endisset()
    @empty($chats)
        {{ Form::label('', 'La chat selezionata non esiste', ['class' => 'input']) }}
    @endempty()
</div>

@include("footer")