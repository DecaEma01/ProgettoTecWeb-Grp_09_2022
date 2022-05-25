<link rel="stylesheet" type="text/css" href="{{ asset('css/global.css') }}" >

@include('menu')

<div class="container large-container">
    <div class="title">FAQ</div>
    <div class="container-content">
        @isset($faq[0])
            {{ Form::open(array('route' => 'update-faq', 'id' => 'updatefaq')) }}
                {{ Form::text('question', $faq[0]->domanda, ['class' => 'input','autofocus'=>'autofocus']) }}
                {{ Form::textarea('answer', $faq[0]->risposta, ['class' => 'input textarea-input']) }}
                {{ Form::submit('Salva', ['class' => 'submit middable_submit']) }}
                {{ Form::hidden('id', $faq[0]->id_faq) }}
            {{ Form::close() }}
            {{ Form::open(array('route' => 'update-faq', 'id' => 'deletefaq')) }}
                {{ Form::submit('Elimina', ['class' => 'submit middable_submit']) }}
            {{ Form::close() }}
        @endisset()
        @empty($faq[0])
            {{ Form::label('', 'La faq selezionata non esiste', ['class' => 'input']) }}
        @endempty()
    </div>
</div>

@include('footer')