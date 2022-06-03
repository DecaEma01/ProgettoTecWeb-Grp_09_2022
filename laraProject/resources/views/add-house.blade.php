<link rel="stylesheet" type="text/css" href="{{ asset('css/global.css') }}" >
<link rel="stylesheet" type="text/css" href="{{ asset('css/catalog.css') }}" >
<link rel="stylesheet" type="text/css" href="{{ asset('css/errors.css') }}" >
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="{{asset('js/managehouse.js')}}" ></script>

@include('menu')

<div class="container large-container">
    <div class="title">Aggiungi un Annuncio</div>
    <div class="container-content">
        <div class="container full-container" >
        {{ Form::open(['route' => 'newHouse', 'id' => 'createHouse', 'class' => 'catalog-newhouse', 'files' => true]) }}

        <section class="filter-section">
            {{ Form::label('', 'Intestazione Casa', ['class' => 'filter-title-label']) }}
            {{ Form::label('', 'Titolo', ['class' => 'filter-parameter-text']) }}
            {{ Form::text('titolo','', ['class' => 'input', 'id' => 'title', 'placeholder' => '']) }}
            @if ($errors->first('titolo'))
            <ul class="errors">
                @foreach ($errors->get('titolo') as $message)
                <br>
                <li>{{ $message }}</li>
                @endforeach
            </ul>
            @endif

            {{ Form::label('', 'Descrizione', ['class' => 'filter-parameter-text']) }}
            {{ Form::textarea('descrizione', '', ['class' => 'input textarea-input']) }}
            <label class="filter-error-container" id="filter-error-title"></label>
            @if ($errors->first('descrizione'))
            <ul class="errors">
                <br>
                @foreach ($errors->get('descrizione') as $message)
                <li>{{ $message }}</li>
                @endforeach
            </ul>
            @endif

        </section>

        <section class="filter-section">
            {{ Form::label('', 'Immagine Casa', ['class' => 'filter-title-label']) }}
            <div class="filter-parameter-container">
                {{ Form::file('foto', ['class' => 'house-file']) }}
            </div>
            @if ($errors->first('foto'))
            <ul class="errors">
                <br>
                @foreach ($errors->get('foto') as $message)
                <li>{{ $message }}</li>
                @endforeach
            </ul>
            @endif

        </div>

        <section class="filter-section">
            {{ Form::label('', 'Canone di Affitto (in €)', ['class' => 'filter-title-label']) }}
            <div class="filter-parameter-container">
                {{ Form::number('prezzo', 'null', ['class' => 'input', 'id' => 'price', 'placeholder' => '200']) }}
            </div>
            <label class="filter-error-container" id="filter-error-prices"></label>
            @if ($errors->first('prezzo'))
            <ul class="errors">
                <br>
                @foreach ($errors->get('prezzo') as $message)
                <li>{{ $message }}</li>
                @endforeach
            </ul>
            @endif
        </section>

        <section class="filter-section">
            {{ Form::label('', 'Disponibilità', ['class' => 'filter-title-label']) }}
            <div class="filter-parameter-container">
                <label class="filter-parameter-text">Dal: </label>
                <input name="data_inizio" type="date" class="input" value="2022-06-01" id="date-min">
                @if ($errors->first('data_inizio'))
                <ul class="errors">
                    <br>
                    @foreach ($errors->get('data_inizio') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
            </div>
            <div class="filter-parameter-container">
                <label class="filter-parameter-text">Al: </label>
                <input name="data_fine" type="date" class="input" value="2022-07-01" id="date-max">
                @if ($errors->first('data_fine'))
                <ul class="errors">
                    <br>
                    @foreach ($errors->get('data_fine') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
            </div>
            <label class="filter-error-container" id="filter-error-dates"></label>
        </section>

        <section class="filter-section">
            {{ Form::label('', 'Locazione', ['class' => 'filter-title-label']) }}
            {{ Form::label('', 'Via', ['class' => 'filter-parameter-text']) }}
            {{ Form::text('via', '', ['class' => 'input', 'id' => 'street', 'placeholder' => 'Via dei Matti, 0']) }}
            <label class="filter-error-container" id="filter-error-prices"></label>
            @if ($errors->first('via'))
            <ul class="errors">
                <br>
                @foreach ($errors->get('via') as $message)
                <li>{{ $message }}</li>
                @endforeach
            </ul>
            @endif
            

            {{ Form::label('', 'Città', ['class' => 'filter-parameter-text']) }}
            {{ Form::text('citta', '', ['class' => 'input', 'id' => 'dimension', 'placeholder' => 'Ancona, Bologna, Torino, ...']) }}
            <label class="filter-error-container" id="filter-error-prices"></label>
            @if ($errors->first('citta'))
            <ul class="errors">
                <br>
                @foreach ($errors->get('citta') as $message)
                <li>{{ $message }}</li>
                @endforeach
            </ul>
            @endif


            {{ Form::label('', 'Regione', ['class' => 'filter-parameter-text']) }}
            {{ Form::text('regione', '', ['class' => 'input', 'id' => 'dimension', 'placeholder' => 'Marche, Emilia Romagna, Piemonte, ...']) }}
            <label class="filter-error-container" id="filter-error-prices"></label>
            @if ($errors->first('regione'))
            <ul class="errors">
                <br>
                @foreach ($errors->get('regione') as $message)
                <li>{{ $message }}</li>
                @endforeach
            </ul>
            @endif

            {{ Form::label('', 'Dimensioni Camera\Appartamento in MQ', ['class' => 'filter-parameter-text']) }}
            {{ Form::number('mq', '', ['class' => 'input', 'id' => 'dimension', 'placeholder' => '20']) }}
            <label class="filter-error-container" id="filter-error-prices"></label>
            @if ($errors->first('mq'))
            <ul class="errors">
                <br>
                @foreach ($errors->get('mq') as $message)
                <li>{{ $message }}</li>
                @endforeach
            </ul>
            @endif

        </section>

        <section class="filter-section">
            {{ Form::label('', 'Dati Casa', ['class' => 'filter-title-label']) }}
            <div class="filter-parameter-container">
                {{ Form::label('', 'Seleziona Tipologia Casa', ['class' => 'filter-parameter-text']) }}
                {{ Form::select('tipo', array('1' => 'Appartamento', '0' => 'Posto Letto'), '1', array('class' => 'input', 'id' => 'filter-type-house')) }}
                @if ($errors->first('tipo'))
                <ul class="errors">
                    <br>
                    @foreach ($errors->get('tipo') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>
                @endif

                <section class="filter-section middable-section">
                    {{ Form::checkbox('wifi',true, ['class' => 'filter-radio']) }}
                    {{ Form::label('', 'Wifi', ['class' => 'filter-parameter-text']) }}
                    @if ($errors->first('wifi'))
                    <ul class="errors">
                        <br>
                        @foreach ($errors->get('wifi') as $message)
                        <li>{{ $message }}</li>
                        @endforeach
                    </ul>
                    @endif

                </section>  
                <section class="filter-section middable-section">
                    {{ Form::checkbox('tv', true, ['class' => 'filter-radio']) }}
                    {{ Form::label('', 'TV', ['class' => 'filter-parameter-text']) }}
                    @if ($errors->first('tv'))
                    <ul class="errors">
                        <br>
                        @foreach ($errors->get('tv') as $message)
                        <li>{{ $message }}</li>
                        @endforeach
                    </ul>
                    @endif
                </section>  
                <section class="filter-section middable-section">
                    {{ Form::checkbox('terrazza', true, ['class' => 'filter-radio']) }}
                    {{ Form::label('', 'Terrazza', ['class' => 'filter-parameter-text']) }}
                    @if ($errors->first('terrazza'))
                    <ul class="errors">
                        <br>
                        @foreach ($errors->get('terrazza') as $message)
                        <li>{{ $message }}</li>
                        @endforeach
                    </ul>
                    @endif
                </section>

                <section class="filter-section" id="filter-type-apartment">
                    {{ Form::label('', 'Numero di Camere', ['class' => 'filter-parameter-text']) }}
                    {{ Form::number('Anum_camere', '', ['class' => 'input', 'id' => 'numberofrooms', 'placeholder' => '2']) }}
                    @if ($errors->first('Anum_camere'))
                    <ul class="errors">
                        <br>
                        @foreach ($errors->get('Anum_camere') as $message)
                        <li>{{ $message }}</li>
                        @endforeach
                    </ul>
                    @endif

                    {{ Form::label('', 'Numero di Posti Letto Totali', ['class' => 'filter-parameter-text']) }}
                    {{ Form::number('Anum_letti', '', ['class' => 'input', 'id' => 'numberofbeds', 'placeholder' => '5']) }}
                    @if ($errors->first('Anum_letti'))
                    <ul class="errors">
                        <br>
                        @foreach ($errors->get('Anum_letti') as $message)
                        <li>{{ $message }}</li>
                        @endforeach
                    </ul>
                    @endif

                    {{ Form::label('', 'Servizi', ['class' => 'filter-parameter-text']) }}
                    <section class="filter-section middable-section">
                        {{ Form::checkbox('Acucina', true, ['class' => 'filter-radio']) }}
                        {{ Form::label('', 'Cucina', ['class' => 'filter-parameter-text']) }}
                        @if ($errors->first('Acucina'))
                        <ul class="errors">
                            <br>
                            @foreach ($errors->get('Acucina') as $message)
                            <li>{{ $message }}</li>
                            @endforeach
                        </ul>
                        @endif
                    </section>  
                    <section class="filter-section middable-section">
                        {{ Form::checkbox('Asoggiorno', true, ['class' => 'filter-radio']) }}
                        {{ Form::label('', 'Locale Ricreativo', ['class' => 'filter-parameter-text']) }}
                        @if ($errors->first('Asoggiorno'))
                        <ul class="errors">
                            <br>
                            @foreach ($errors->get('Asoggiorno') as $message)
                            <li>{{ $message }}</li>
                            @endforeach
                        </ul>
                        @endif
                    </section>  
                    
                </section>

                <section class="filter-section" id="filter-type-bed">
                    {{ Form::label('', 'Numero di Posti Letto totali in Appartamento', ['class' => 'filter-parameter-text']) }}
                    {{ Form::number('Pletti_app', '', ['class' => 'input', 'id' => 'numberoftotalrooms', 'placeholder' => '5']) }}
                    @if ($errors->first('Pletti:app'))
                    <ul class="errors">
                        <br>
                        @foreach ($errors->get('data_fine') as $message)
                        <li>{{ $message }}</li>
                        @endforeach
                    </ul>
                    @endif

                    {{ Form::label('', 'Numero di Posti Letto nella Stanza', ['class' => 'filter-parameter-text']) }}
                    {{ Form::number('Pletti_camera', '', ['class' => 'input', 'id' => 'numberofbeds', 'placeholder' => '2']) }}
                    @if ($errors->first('Pletti_camera'))
                    <ul class="errors">
                        <br>
                        @foreach ($errors->get('Pletti_camera') as $message)
                        <li>{{ $message }}</li>
                        @endforeach
                    </ul>
                    @endif

                    <section class="filter-section middable-section">
                        {{ Form::checkbox('Pstudio', true, ['class' => 'filter-radio']) }}
                        {{ Form::label('', 'Angolo Studio', ['class' => 'filter-parameter-text']) }}
                        @if ($errors->first('Pstudio'))
                        <ul class="errors">
                            <br>
                            @foreach ($errors->get('Pstudio') as $message)
                            <li>{{ $message }}</li>
                            @endforeach
                        </ul>
                        @endif
                    </section>  
                </section>
            </div>
            <label class="filter-error-container" id="filter-error-house"></label>
        </section>

        <section class="filter-section">
            {{ Form::label('', 'Categoria Utenza', ['class' => 'filter-title-label']) }}
            {{ Form::label('', 'Genere', ['class' => 'filter-parameter-text']) }}
            {{ Form::select('sesso', array('0' => 'Maschi & Femmine', '1' => 'Solo Maschi', '2' => 'Solo Femmine'), '0', array('class' => 'input', 'id' => 'filter-gender')) }}
            @if ($errors->first('sesso'))
            <ul class="errors">
                <br>
                @foreach ($errors->get('sesso') as $message)
                <li>{{ $message }}</li>
                @endforeach
            </ul>
            @endif

            {{ Form::label('', 'Età minima', ['class' => 'filter-parameter-text']) }}
            {{ Form::number('eta_min', '', ['class' => 'input', 'id' => 'age_min', 'placeholder' => '21']) }}
            @if ($errors->first('eta_min'))
            <ul class="errors">
                <br>
                @foreach ($errors->get('eta_min') as $message)
                <li>{{ $message }}</li>
                @endforeach
            </ul>
            @endif

            {{ Form::label('', 'Età massima', ['class' => 'filter-parameter-text']) }}
            {{ Form::number('eta_max', '', ['class' => 'input', 'id' => 'age_max', 'placeholder' => '34']) }}
            @if ($errors->first('eta_max'))
            <ul class="errors">
                <br>
                @foreach ($errors->get('eta_max') as $message)
                <li>{{ $message }}</li>
                @endforeach
            </ul>
            @endif

            <label class="filter-error-container" id="filter-error-user"></label>
        </section>

       
        {{ Form::reset('Annulla', ['class' => 'submit middable_submit', 'id' => 'chat-submit']) }}
        {{ Form::submit('Aggiungi', ['class' => 'submit middable_submit', 'id' => 'chat-submit']) }}
    {{ Form::close() }}
    </div>
</div>
</div>


@include('footer')


@include('footer')