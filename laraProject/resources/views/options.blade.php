<link rel="stylesheet" type="text/css" href="{{ asset('css/global.css') }}" >
<link rel="stylesheet" type="text/css" href="{{ asset('css/previews.css') }}" >

@include("menu")

<div class="container large-container">
    <div class="title">Opzionamenti</div>
    <div class="container-content">
        @isset($options)
            @foreach ($options as $option)
                <a href="{{'chat/$chat->id_chat'}}" class="preview-container">
                    {{ Form::label('', $option->id_locatario, ['class' => 'preview-title']) }}
                    {{ Form::label('', date('Y/m/d H:i:s', $option->data_opz), ['class' => 'preview-date']) }}
                </a>
            @endforeach()
        @endisset()
    </div>
    
    @empty($options)
        {{ Form::label('', 'La casa non è ancora stata opzionata da nessuno', ['class' => 'input']) }}
    @endempty()
</div>

@include("footer")