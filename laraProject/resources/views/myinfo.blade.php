<link rel="stylesheet" type="text/css" href="{{ asset('css/global.css') }}" >
<link rel="stylesheet" type="text/css" href="{{ asset('css/signup.css') }}" >
<script src="{{asset('js/signup.js')}}" ></script><!--questo inutile per ora-->

@include('menu')

<div class="container large-container">
    <div class="title">I miei dati</div>
    {{ Form::open(array('route' => 'update-myinfo', 'id' => 'updateUser', 'class' => 'container-content', 'required'=>'required')) }}
    <div class="container-content">
    {{ Form::text('name', Auth::user()->nome, ['class' => 'input middable_input', 'id' => 'name','placeholder' => 'Nome']) }}
    @if($errors->first('name'))
            <ul class="errors">
            @foreach($errors->get('name') as $message)
                <li>{{ $message }}</li>
            @endforeach
            </ul>
        @endif
    {{ Form::text('surname', Auth::user()->cognome, ['class' => 'input middable_input', 'id' => 'surname','placeholder' => 'Cognome']) }}
    @if($errors->first('surname'))
            <ul class="errors">
            @foreach($errors->get('surname') as $message)
                <li>{{ $message }}</li>
            @endforeach
            </ul>
        @endif
    {{ Form::text('username', Auth::user()->user, ['class' => 'input', 'id' => 'username', 'placeholder' => 'Username','required'=>'required']) }}
    @if($errors->first('username'))
            <ul class="errors">
            @foreach($errors->get('username') as $message)
                <li>{{ $message }}</li>
            @endforeach
            </ul>
    @endif
    {{ Form::text('e-mail', Auth::user()->email, ['class' => 'input', 'id' => 'e-mail','placeholder' => 'E-mail','required'=>'required']) }}
    @if($errors->first('e-mail'))
            <ul class="errors">
            @foreach($errors->get('e-mail') as $message)
                <li>{{ $message }}</li>
            @endforeach
            </ul>
    @endif


    @if(null !== Auth::user()->sesso && null !== Auth::user()->eta)
        {!! Form::select('gender', array('Seleziona Genere','Uomo' => 'Uomo', 'Donna' => 'Donna'), Auth::user()->sesso, ['class' => 'input input_lessee','id' => 'sesso', 'required'=>'required']); !!}
        @if($errors->first('gender'))
            <ul class="errors">
            @foreach($errors->get('gender') as $message)
                <li>{{ $message }}</li>
            @endforeach
            </ul>
    @endif
        {{ Form::number('eta', Auth::user()->eta, ['class' => 'input','id' => 'eta', 'placeholder' => 'Età', 'required'=>'required']) }}
        @if($errors->first('eta'))
            <ul class="errors">
            @foreach($errors->get('eta') as $message)
                <li>{{ $message }}</li>
            @endforeach
            </ul>
        @endif
    @endif

    
        <!--Aggiungere modifica dati sul submit-->
        <br>
        <hr class="content_separator">
        <br>
        <div class="submit alternative_submit middable_submit" onclick="window.location.replace('profile.php')">Annulla</div>
        {{ Form::submit('Salva', ['class' => 'submit middable_submit']) }}
    </div>
</div>   


@include('footer')