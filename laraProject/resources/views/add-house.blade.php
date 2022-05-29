<link rel="stylesheet" type="text/css" href="{{ asset('css/global.css') }}" >
<link rel="stylesheet" type="text/css" href="{{ asset('css/catalog.css') }}" >
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="{{asset('js/managehouse.js')}}" ></script>

@include('menu')

<div class="container large-container">
    <div class="title">Aggiungi un nuovo Annuncio</div>
    <div class="container-content">
        <div class="container full-container" >
        {{ Form::open(['route' => 'create-message', 'id' => 'createHouse', 'class' => 'catalog-newhouse', 'files' => true]) }}

            <section class="filter-section">
                {{ Form::label('', 'Immagine Casa', ['class' => 'filter-title-label']) }}
                <div class="filter-parameter-container">
                    {{ Form::file('image', ['class' => 'house-file']) }}
                </div>
            </div>

            <section class="filter-section">
                {{ Form::label('', 'Canone di Affitto (in €)', ['class' => 'filter-title-label']) }}
                <div class="filter-parameter-container">
                    {{ Form::number('', '', ['class' => 'input', 'id' => 'price', 'placeholder' => '200']) }}
                </div>
                <label class="filter-error-container" id="filter-error-prices"></label>
            </section>

            <section class="filter-section">
                {{ Form::label('', 'Disponibilità', ['class' => 'filter-title-label']) }}
                <div class="filter-parameter-container">
                    <label class="filter-parameter-text">Dal: </label>
                    <input name="" type="date" class="input" value="2022-06-01" id="date-min">
                </div>
                <div class="filter-parameter-container">
                    <label class="filter-parameter-text">Al: </label>
                    <input name="" type="date" class="input" value="2022-07-01" id="date-max">
                </div>
                <label class="filter-error-container" id="filter-error-dates"></label>
            </section>

            <section class="filter-section">
                {{ Form::label('', 'Città', ['class' => 'filter-title-label']) }}
                {{ Form::text('', '', ['class' => 'input', 'id' => 'dimension', 'placeholder' => 'Ancona, Bologna, Torino, ...']) }}
                <label class="filter-error-container" id="filter-error-prices"></label>
            </section>

            <section class="filter-section">
                {{ Form::label('', 'Dati Casa', ['class' => 'filter-title-label']) }}
                <div class="filter-parameter-container">
                    {{ Form::label('', 'Seleziona Tipologia Casa', ['class' => 'filter-parameter-text']) }}
                    {{ Form::select('', array('0' => 'Appartmento', '1' => 'Posto Letto'), '0', array('class' => 'input', 'id' => 'filter-type-house')) }}

                    <section class="filter-section" id="filter-type-apartment">
                        {{ Form::label('', 'Dimensioni Appartamento in MQ', ['class' => 'filter-parameter-text']) }}
                        {{ Form::number('', '', ['class' => 'input', 'id' => 'dimension', 'placeholder' => '100']) }}
                        {{ Form::label('', 'Numero di Camere', ['class' => 'filter-parameter-text']) }}
                        {{ Form::number('', '', ['class' => 'input', 'id' => 'numberofrooms', 'placeholder' => '2']) }}
                        {{ Form::label('', 'Numero di Posti Letto Totali', ['class' => 'filter-parameter-text']) }}
                        {{ Form::number('', '', ['class' => 'input', 'id' => 'numberofbeds', 'placeholder' => '5']) }}
                        {{ Form::label('', 'Servizi', ['class' => 'filter-parameter-text']) }}
                        <section class="filter-section middable-section">
                            {{ Form::checkbox('', 'kitchen', false, ['class' => 'filter-radio']) }}
                            {{ Form::label('', 'Cucina', ['class' => 'filter-parameter-text']) }}
                        </section>  
                        <section class="filter-section middable-section">
                            {{ Form::checkbox('', 'living', false, ['class' => 'filter-radio']) }}
                            {{ Form::label('', 'Locale Ricreativo', ['class' => 'filter-parameter-text']) }}
                        </section>  
                        <section class="filter-section middable-section">
                            {{ Form::checkbox('', 'wifi', false, ['class' => 'filter-radio']) }}
                            {{ Form::label('', 'Wifi', ['class' => 'filter-parameter-text']) }}
                        </section>  
                        <section class="filter-section middable-section">
                            {{ Form::checkbox('', 'tv', false, ['class' => 'filter-radio']) }}
                            {{ Form::label('', 'TV', ['class' => 'filter-parameter-text']) }}
                        </section>  
                        <section class="filter-section middable-section">
                            {{ Form::checkbox('', 'terrace', false, ['class' => 'filter-radio']) }}
                            {{ Form::label('', 'Terrazza', ['class' => 'filter-parameter-text']) }}
                        </section>
                    </section>

                    <section class="filter-section" id="filter-type-bed">
                    {{ Form::label('', 'Dimensioni Camera in MQ', ['class' => 'filter-parameter-text']) }}
                        {{ Form::number('', '', ['class' => 'input', 'id' => 'dimension', 'placeholder' => '20']) }}
                        {{ Form::label('', 'Numero di Posti Letto totali in Appartamento', ['class' => 'filter-parameter-text']) }}
                        {{ Form::number('', '', ['class' => 'input', 'id' => 'numberoftotalrooms', 'placeholder' => '5']) }}
                        {{ Form::label('', 'Numero di Posti Letto nella Stanza', ['class' => 'filter-parameter-text']) }}
                        {{ Form::number('', '', ['class' => 'input', 'id' => 'numberofbeds', 'placeholder' => '2']) }}
                        <section class="filter-section middable-section">
                            {{ Form::checkbox('', 'studio', false, ['class' => 'filter-radio']) }}
                            {{ Form::label('', 'Angolo Studio', ['class' => 'filter-parameter-text']) }}
                        </section>  
                    </section>
                </div>
                <label class="filter-error-container" id="filter-error-house"></label>
            </section>

            <section class="filter-section">
                {{ Form::label('', 'Categoria Utenza', ['class' => 'filter-title-label']) }}
                {{ Form::label('', 'Genere', ['class' => 'filter-parameter-text']) }}
                {{ Form::select('', array('0' => 'Maschi & Femmine', '1' => 'Solo Maschi', '2' => 'Solo Femmine'), '0', array('class' => 'input', 'id' => 'filter-gender')) }}
                {{ Form::label('', 'Età minima', ['class' => 'filter-parameter-text']) }}
                {{ Form::number('', '', ['class' => 'input', 'id' => 'age', 'placeholder' => '21']) }}
                <label class="filter-error-container" id="filter-error-user"></label>
            </section>

            {{ Form::reset('Annulla', ['class' => 'submit middable_submit', 'id' => 'chat-submit']) }}
            {{ Form::submit('+ Aggiungi', ['class' => 'submit middable_submit', 'id' => 'chat-submit']) }}
        {{ Form::close() }}
        </div>
    </div>
</div>


@include('footer')