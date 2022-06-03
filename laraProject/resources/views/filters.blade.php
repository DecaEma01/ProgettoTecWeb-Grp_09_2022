<link rel="stylesheet" type="text/css" href="{{asset('css/global.css')}}" >
<link rel="stylesheet" type="text/css" href="{{asset('css/catalog.css')}}" >
<link rel="stylesheet" type="text/css" href="{{asset('css/errors.css')}}" >
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="{{asset('js/catalog.js')}}" ></script>

@include('menu')
<div class="container full-container">
    <div class="container-content">
        <!-- TODO: check user level, allow only if level = locatario (2) -->
        {!! Form::label('','Nascondi Filtri', ['class' => 'link_text', 'id' => 'fo']) !!}

        {!! Form::open(['route' => "filterCatalog", 'id' => 'createHouse', 'class' => 'catalog-newhouse']) !!}

            <section class="filter-section">
                {!! Form::label('','Fascia Canone di Affitto', ['class' => 'filter-title-label']) !!}
                <div class="filter-parameter-container">
                    <input name="min" type="range" min="1" max="1000" value='1' id="prize-min" ><br />
                    <label class="filter-parameter-text">Prezzo minimo: €<span id="min"></span></label>
                    @if ($errors->first('min'))
                    <ul class="errors">
                        <br>
                        @foreach ($errors->get('min') as $message)
                        <li>{{ $message }}</li>
                        @endforeach
                    </ul>
                    @endif
                </div>
                <div class="filter-parameter-container">
                    <input name="max" type="range" min="1" max="1000" value='1000' id="prize-max"><br />
                    <label class="filter-parameter-text">Prezzo massimo: €<span id="max"></span></label>
                    @if ($errors->first('max'))
                    <ul class="errors">
                        <br>
                        @foreach ($errors->get('max') as $message)
                        <li>{{ $message }}</li>
                        @endforeach
                    </ul>
                    @endif
                </div>
                <label class="filter-error-container" id="filter-error-prices"></label>
            </section>

            <section class="filter-section">
                {!! Form::label('','Periodo', ['class' => 'filter-title-label']) !!}
                <div class="filter-parameter-container">
                    <label class="filter-parameter-text">Dal: </label>
                    <input name="data_inizio" type="date" class="input" value='null' id="date-min">
                    @if ($errors->first('data_inizio'))
                    <ul class="errors">
                        @foreach ($errors->get('data_inizio') as $message)
                        <li>{{ $message }}</li>
                        @endforeach
                    </ul>
                    @endif
                </div>
                <div class="filter-parameter-container">
                    <label class="filter-parameter-text">Al: </label>
                    <input name="data_fine" type="date" class="input" value='null' id="date-max">
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
                {!! Form::label('','Città', ['class' => 'filter-title-label']) !!}
                {!! Form::text('citta','', ['class' => 'input', 'id' => 'dimension', 'placeholder' => 'Ancona, Bologna, Torino, ...']) !!}
                <label class="filter-error-container" id="filter-error-prices"></label>
                @if ($errors->first('citta'))
                <ul class="errors">
                    <br>
                    @foreach ($errors->get('citta') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
            </section>

            <section class="filter-section">
            {!! Form::label( '','Regione', ['class' => 'filter-parameter-text']) !!}
                {!! Form::text('regione','', ['class' => 'input', 'id' => 'dimension', 'placeholder' => 'Marche, Emilia Romagna, Piemonte, ...']) !!}
                <label class="filter-error-container" id="filter-error-prices"></label>
                @if ($errors->first('regione'))
                <ul class="errors">
                    <br>
                    @foreach ($errors->get('regione') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
            </section>

            <section class="filter-section">
            {!! Form::label('', 'Dimensioni minime in MQ', ['class' => 'filter-parameter-text']) !!} <!--Appartamento-->
                    {!! Form::number('mq', 'null', ['class' => 'input', 'id' => 'dimension', 'placeholder' => '100']) !!}
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
                {!! Form::label('','Dati Casa', ['class' => 'filter-title-label']) !!}
                <div class="filter-parameter-container">
                    <label class="filter-parameter-text">Seleziona Tipologia Casa</label>
                    {!! Form::select('tipo', array('0' => 'Appartamento & Posto Letto', '1' => 'Appartamento', '2' => 'Posto Letto'),'0', array('class' => 'input', 'id' => 'filter-type-house')) !!}
                    @if ($errors->first('tipo'))
                    <ul class="errors">
                        <br>
                        @foreach ($errors->get('tipo') as $message)
                        <li>{{ $message }}</li>
                        @endforeach
                    </ul>
                    @endif
                    <section class="filter-section middable-section">
                        {!! Form::checkbox('wifi', 'true', ['class' => 'filter-radio']) !!}
                        {!!Form::label('','wifi', ['class' => 'filter-parameter-text']) !!}
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
                        {!! Form::checkbox('tv', 'true', ['class' => 'filter-radio']) !!}
                        {!! Form::label( '','TV', ['class' => 'filter-parameter-text']) !!}
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
                        {!! Form::checkbox('terrazza', 'true', ['class' => 'filter-radio']) !!}
                        {!! Form::label( '','Terrazza', ['class' => 'filter-parameter-text']) !!}
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
                        
                        <div class= 'filter-parameter-text'><h3> Filtri tipologia : appartamento </h3></div>
                        {!! Form::label( '','Numero di camere appartamento ', ['class' => 'filter-parameter-text']) !!}
                        {!! Form::number('Anum_camere', 'null', ['class' => 'input', 'id' => 'numberofrooms', 'placeholder' => '2']) !!}
                        @if ($errors->first('Anum_camere'))
                        <ul class="errors">
                            <br>
                            @foreach ($errors->get('Anum_camere') as $message)
                            <li>{{ $message }}</li>
                            @endforeach
                        </ul>
                        @endif
                        {!! Form::label('','Numero di posti letto appartamento', ['class' => 'filter-parameter-text']) !!}
                        {!! Form::number('Anum_letti', 'null', ['class' => 'input', 'id' => 'numberofbeds', 'placeholder' => '5']) !!}
                        @if ($errors->first('Anum_letti'))
                        <ul class="errors">
                            <br>
                            @foreach ($errors->get('Anum_letti') as $message)
                            <li>{{ $message }}</li>
                            @endforeach
                        </ul>
                        @endif
                        {!! Form::label('','Servizi', ['class' => 'filter-parameter-text']) !!}
                        <section class="filter-section middable-section">
                            {!! Form::checkbox('Acucina', true, ['class' => 'filter-radio']) !!}
                            {!! Form::label('', 'Cucina', ['class' => 'filter-parameter-text']) !!}
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
                            {!! Form::checkbox('Asoggiorno', true, ['class' => 'filter-radio']) !!}
                            {!! Form::label('', 'Locale Ricreativo', ['class' => 'filter-parameter-text']) !!}
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
                        <div class= 'filter-parameter-text'><h3> Filtri tipologia : posto letto </h3></div>
                    <!--{{ Form::label('', 'Dimensioni Camera in MQ', ['class' => 'filter-parameter-text']) }}
                        {{ Form::number('mq', 'null', ['class' => 'input', 'id' => 'dimension', 'placeholder' => '20']) }}-->
                        {!! Form::label('', 'Numero di posti letto totali nella casa del posto letto ', ['class' => 'filter-parameter-text']) !!}
                        {!! Form::number('Pletti_app', 'null', ['class' => 'input', 'id' => 'numberoftotalrooms', 'placeholder' => '5']) !!}
                        @if ($errors->first('Pletti_app'))
                        <ul class="errors">
                            <br>
                            @foreach ($errors->get('Pletti_app') as $message)
                            <li>{{ $message }}</li>
                            @endforeach
                        </ul>
                        @endif
                        {!!Form::label('', 'Numero di posti letto nella camera del posto letto', ['class' => 'filter-parameter-text']) !!}
                        {!!Form::number('Pletti_camera', 'null', ['class' => 'input', 'id' => 'numberofbeds', 'placeholder' => '2'])!!}
                        @if ($errors->first('Pletti_camera'))
                        <ul class="errors">
                            <br>
                            @foreach ($errors->get('Pletti_camera') as $message)
                            <li>{{ $message }}</li>
                            @endforeach
                        </ul>
                        @endif
                        <section class="filter-section middable-section">
                            {!! Form::checkbox('Pstudio', true, ['class' => 'filter-radio']) !!}
                            {!! Form::label('', 'Angolo Studio', ['class' => 'filter-parameter-text']) !!}
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
                <label class="filter-error-container" id="filter-error-dates"></label>
            </section>


            {!! Form::reset('Azzera', ['class' => 'submit middable_submit', 'id' => 'chat-submit']) !!}
            {!! Form::submit('🔍 Cerca', ['class' => 'submit middable_submit', 'id' => 'chat-submit']) !!}
        {!! Form::close() !!}
    </div>
</div>

@include('footer')