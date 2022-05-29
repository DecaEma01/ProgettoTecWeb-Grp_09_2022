<link rel="stylesheet" type="text/css" href="{{ asset('css/global.css') }}" >

@include('menu')

<div class="container large-container">
    <div class="title">FAQ</div>
    <div class="container-content">
        @if($mode == 'edit')
            <!--form popalata-->
            {!! Form::model($faq, ['route' => 'update-faq', 'id' => 'updatefaq', 'method' => 'put' ]) !!}
        @else
             <!--form nuova vuota-->
            {!! Form::open([ 'route' => 'insert-faq', 'method' => 'post' ]) !!}
        @endif

            <!--form per fare l'inserimento, se è collegato un modello recupera il campo $faq -> domanda -->

                {!! Form::text('domanda', null, ['id' => 'domanda', 'class' => 'input', 'autofocus'=>'autofocus', 'required'=>'required']) !!}
                {!! Form::textarea('risposta', null, ['id' => 'risposta', 'class' => 'input textarea-input', 'required'=>'required']) !!}
                {!! Form::hidden('id_faq', NULL, ['id' => 'id_faq']) !!}
                {!! Form::submit('Salva', ['class' => 'submit middable_submit']) !!}
                 {!! Form::close() !!}
        @if($mode == 'edit')
            {!! Form::open(array('route' => 'delete-faq', 'id' => 'deletefaq', 'method' => 'delete')) !!}
                {!! Form::hidden('id_faq', $faq -> id_faq, ['id' => 'id_faq']) !!}
                {!! Form::submit('Elimina', ['class' => 'submit middable_submit'] ) !!}
            {!! Form::close() !!}
        @endif
    </div>
</div>
<script>
    const form=document.getElementById('deletefaq');
    form.addEventListener('submit', e => {
        if(!confirm("Sei sicuro di voler eliminare la faq")) {
            e.preventDefault();
        }
    })
</script>
@include('footer')
