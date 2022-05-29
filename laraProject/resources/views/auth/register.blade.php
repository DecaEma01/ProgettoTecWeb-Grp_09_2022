<link rel="stylesheet" type="text/css" href="{{ asset('css/global.css') }}" >
<link rel="stylesheet" type="text/css" href="{{ asset('css/signup.css') }}" >
<script src="{{asset('js/signup.js')}}" ></script>
@include('menu')
<div class="container">
    <div class="title">
        Registrazione
    </div> 
    {{ Form::open(array('route' => 'register', 'id' => 'register', 'class' => 'container-content')) }}
        <div id="radios">
        <input id="rad1" type="radio" name="radioBtn" class="myRadios" value="Locatario" checked onchange="radioChangedValue(this.id)"  />
        <label class="labels" for="rad1">Locatario</label>
        <input id="rad2" type="radio" name="radioBtn" class="myRadios" value="Locatore" onchange="radioChangedValue(this.id)">
        <label class="labels" for="rad2">Locatore</label>
        <div id="bckgrnd"></div>
        </div>
        <p id="desc_locatario">
            Da locatario puoi visualizzare l'intero catalogo delle case disponibili e metterti in contatto direttamente coi locatori
        </p>
        <p id="desc_locatore">
            Da locatore puoi inserire le tue case e/o posti letto e metterti in contatto direttamente coi locatori eventualmente interessati
        </p>

        <!---dati locatario--->
        {{ Form::text('name', '', ['class' => 'input', 'id' => 'name','placeholder' => 'Nome']) }}
                @if ($errors->first('name'))
                <ul class="errors">
                    @foreach ($errors->get('name') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
        
       
        {{ Form::text('surname', '', ['class' => 'input', 'id' => 'surname', 'placeholder' => 'Cognome']) }}
                @if ($errors->first('surname'))
                <ul class="errors">
                    @foreach ($errors->get('surname') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
        

        
        {{ Form::text('user', '', ['class' => 'input','id' => 'user', 'placeholder' => 'Username']) }}
                @if ($errors->first('user'))
                <ul class="errors">
                    @foreach ($errors->get('user') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>
                @endif      
        

        {{ Form::text('email', '', ['class' => 'input','id' => 'email', 'placeholder' => 'Email']) }}
                @if ($errors->first('email'))
                <ul class="errors">
                    @foreach ($errors->get('email') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
        

        {{ Form::password('password', ['class' => 'input', 'id' => 'password', 'placeholder' => 'Password']) }}
                @if ($errors->first('password'))
                <ul class="errors">
                    @foreach ($errors->get('password') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>
                @endif

        {{ Form::password('password_confirmation', ['class' => 'input', 'id' => 'password-confirm', 'placeholder' => 'Ripeti Password']) }}

        
        {!! Form::select('genere', array('Seleziona Genere','Uomo' => 'Uomo', 'Donna' => 'Donna'), 'Seleziona Genere', ['class' => 'input input_lessee','id' => 'sesso']); !!}
                @if ($errors->first('genere'))
                <ul class="errors">
                    @foreach ($errors->get('genere') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>
                @endif

        {{ Form::number('eta', '', ['class' => 'input input_lessee','id' => 'eta', 'placeholder' => 'Età']) }}
                @if ($errors->first('eta'))
                <ul class="errors">
                    @foreach ($errors->get('eta') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
        

        <input type="checkbox" class="checkbox" id="terms_checkbox" name="terms_checkbox" /><div class="checkbox_text">Accetto i <a href="terms.php">Termini e le Condizioni</a></div>
        <input type="checkbox" class="checkbox" id="privacy_checkbox" name="privacy_checkbox" /><div class="checkbox_text">Accetto la <a href="privacy.php">Privacy Policy</a></div>
        <br><br><br><br>
        {{ Form::submit('Registrami', ['class' => 'submit']) }}
        <br>
        <hr class="content_separator">
        <br>
        
        <a href="{{ route('login') }}"><div class="submit alternative_submit">Effettua l'accesso</div></a>
    {{ Form::close() }}   
</div>

@include('footer')