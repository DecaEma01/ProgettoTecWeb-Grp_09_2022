<link rel="stylesheet" type="text/css" href="{{ asset('css/global.css') }}" >
<link rel="stylesheet" type="text/css" href="{{ asset('css/catalog.css') }}" >
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="{{asset('js/managehouse.js')}}" ></script>

@include('menu')

<div class="container large-container">
    <div class="title">Aggiungi un Annuncio</div>
    <div class="container-content">
        <div class="container full-container" >
        {{ Form::open(['route' => 'create-message', 'id' => 'createHouse', 'class' => 'catalog-newhouse', 'files' => true]) }}

        <section class="filter-section">
            {{ Form::label('', 'Intestazione Casa', ['class' => 'filter-title-label']) }}
            {{ Form::label('', 'Titolo', ['class' => 'filter-parameter-text']) }}
            {{ Form::text('titolo', '', ['class' => 'input', 'id' => 'title', 'placeholder' => '']) }}
            {{ Form::label('', 'Descrizione', ['class' => 'filter-parameter-text']) }}
            {{ Form::textarea('descrizione', '', ['class' => 'input textarea-input']) }}
            <label class="filter-error-container" id="filter-error-title"></label>
        </section>

        <section class="filter-section">
            {{ Form::label('', 'Immagine Casa', ['class' => 'filter-title-label']) }}
            <div class="filter-parameter-container">
                {{ Form::file('foto', ['class' => 'house-file']) }}
            </div>
        </div>

        <section class="filter-section">
            {{ Form::label('', 'Canone di Affitto (in €)', ['class' => 'filter-title-label']) }}
            <div class="filter-parameter-container">
                {{ Form::number('prezzo', '', ['class' => 'input', 'id' => 'price', 'placeholder' => '200']) }}
            </div>
            <label class="filter-error-container" id="filter-error-prices"></label>
        </section>

        <section class="filter-section">
            {{ Form::label('', 'Disponibilità', ['class' => 'filter-title-label']) }}
            <div class="filter-parameter-container">
                <label class="filter-parameter-text">Dal: </label>
                <input name="data_inizio" type="date" class="input" value="2022-06-01" id="date-min">
            </div>
            <div class="filter-parameter-container">
                <label class="filter-parameter-text">Al: </label>
                <input name="data_fine" type="date" class="input" value="2022-07-01" id="date-max">
            </div>
            <label class="filter-error-container" id="filter-error-dates"></label>
        </section>

        <section class="filter-section">
            {{ Form::label('', 'Locazione', ['class' => 'filter-title-label']) }}
            {{ Form::label('', 'Via', ['class' => 'filter-parameter-text']) }}
            {{ Form::text('via', '', ['class' => 'input', 'id' => 'street', 'placeholder' => 'Via dei Matti, 0']) }}
            <label class="filter-error-container" id="filter-error-prices"></label>

            {{ Form::label('', 'Città', ['class' => 'filter-parameter-text']) }}
            {{ Form::text('citta', '', ['class' => 'input', 'id' => 'dimension', 'placeholder' => 'Ancona, Bologna, Torino, ...']) }}
            <label class="filter-error-container" id="filter-error-prices"></label>


            {{ Form::label('', 'Regione', ['class' => 'filter-parameter-text']) }}
            {{ Form::text('regione', '', ['class' => 'input', 'id' => 'dimension', 'placeholder' => 'Marche, Emilia Romagna, Piemonte, ...']) }}
            <label class="filter-error-container" id="filter-error-prices"></label>
        </section>

        <section class="filter-section">
            {{ Form::label('', 'Dati Casa', ['class' => 'filter-title-label']) }}
            <div class="filter-parameter-container">
                {{ Form::label('', 'Seleziona Tipologia Casa', ['class' => 'filter-parameter-text']) }}
                {{ Form::select('tipo', array('0' => 'Appartmento', '1' => 'Posto Letto'), '0', array('class' => 'input', 'id' => 'filter-type-house')) }}

                <section class="filter-section" id="filter-type-apartment">
                    {{ Form::label('', 'Dimensioni Appartamento in MQ', ['class' => 'filter-parameter-text']) }}
                    {{ Form::number('mq', '', ['class' => 'input', 'id' => 'dimension', 'placeholder' => '100']) }}
                    {{ Form::label('', 'Numero di Camere', ['class' => 'filter-parameter-text']) }}
                    {{ Form::number('Anum_camere', '', ['class' => 'input', 'id' => 'numberofrooms', 'placeholder' => '2']) }}
                    {{ Form::label('', 'Numero di Posti Letto Totali', ['class' => 'filter-parameter-text']) }}
                    {{ Form::number('Anum_letti', '', ['class' => 'input', 'id' => 'numberofbeds', 'placeholder' => '5']) }}
                    {{ Form::label('', 'Servizi', ['class' => 'filter-parameter-text']) }}
                    <section class="filter-section middable-section">
                        {{ Form::checkbox('Acucina', 'kitchen', false, ['class' => 'filter-radio']) }}
                        {{ Form::label('', 'Cucina', ['class' => 'filter-parameter-text']) }}
                    </section>  
                    <section class="filter-section middable-section">
                        {{ Form::checkbox('Asoggiorno', 'living', false, ['class' => 'filter-radio']) }}
                        {{ Form::label('', 'Locale Ricreativo', ['class' => 'filter-parameter-text']) }}
                    </section>  
                    <section class="filter-section middable-section">
                        {{ Form::checkbox('wifi', 'wifi', false, ['class' => 'filter-radio']) }}
                        {{ Form::label('', 'Wifi', ['class' => 'filter-parameter-text']) }}
                    </section>  
                    <section class="filter-section middable-section">
                        {{ Form::checkbox('tv', 'tv', false, ['class' => 'filter-radio']) }}
                        {{ Form::label('', 'TV', ['class' => 'filter-parameter-text']) }}
                    </section>  
                    <section class="filter-section middable-section">
                        {{ Form::checkbox('terrazza', 'terrace', false, ['class' => 'filter-radio']) }}
                        {{ Form::label('', 'Terrazza', ['class' => 'filter-parameter-text']) }}
                    </section>
                </section>

                <section class="filter-section" id="filter-type-bed">
                {{ Form::label('', 'Dimensioni Camera in MQ', ['class' => 'filter-parameter-text']) }}
                    {{ Form::number('mq', '', ['class' => 'input', 'id' => 'dimension', 'placeholder' => '20']) }}
                    {{ Form::label('', 'Numero di Posti Letto totali in Appartamento', ['class' => 'filter-parameter-text']) }}
                    {{ Form::number('Pletti_app', '', ['class' => 'input', 'id' => 'numberoftotalrooms', 'placeholder' => '5']) }}
                    {{ Form::label('', 'Numero di Posti Letto nella Stanza', ['class' => 'filter-parameter-text']) }}
                    {{ Form::number('Pletti_camera', '', ['class' => 'input', 'id' => 'numberofbeds', 'placeholder' => '2']) }}
                    <section class="filter-section middable-section">
                        {{ Form::checkbox('Pstudio', 'studio', false, ['class' => 'filter-radio']) }}
                        {{ Form::label('', 'Angolo Studio', ['class' => 'filter-parameter-text']) }}
                    </section>  
                </section>
            </div>
            <label class="filter-error-container" id="filter-error-house"></label>
        </section>

        <section class="filter-section">
            {{ Form::label('', 'Categoria Utenza', ['class' => 'filter-title-label']) }}
            {{ Form::label('', 'Genere', ['class' => 'filter-parameter-text']) }}
            {{ Form::select('sesso', array('null' => 'Maschi & Femmine', '1' => 'Solo Maschi', '2' => 'Solo Femmine'), '0', array('class' => 'input', 'id' => 'filter-gender')) }}
            {{ Form::label('', 'Età minima', ['class' => 'filter-parameter-text']) }}
            {{ Form::number('eta_min', '', ['class' => 'input', 'id' => 'age_min', 'placeholder' => '21']) }}
            {{ Form::label('', 'Età massima', ['class' => 'filter-parameter-text']) }}
            {{ Form::number('eta_max', '', ['class' => 'input', 'id' => 'age_max', 'placeholder' => '34']) }}
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