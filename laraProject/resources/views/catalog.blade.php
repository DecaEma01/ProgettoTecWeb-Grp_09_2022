<link rel="stylesheet" type="text/css" href="{{ asset('css/global.css') }}" >
<link rel="stylesheet" type="text/css" href="{{ asset('css/catalog.css') }}" >
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="{{asset('js/catalog.js')}}" ></script>

@include('menu')
<div class="container full-container">
    <div class="container-content">
        <!-- TODO: check user level, allow only if level = locatario (2) -->
        {{ Form::label('', 'Nascondi Filtri', ['class' => 'link_text', 'id' => 'fo']) }}

        {{ Form::open(array('route' => 'create-message', 'id' => 'createHouse', 'class' => 'catalog-newhouse')) }}

            <section class="filter-section">
                {{ Form::label('', 'Fascia Canone di Affitto', ['class' => 'filter-title-label']) }}
                <div class="filter-parameter-container">
                    <input name="" type="range" min="1" max="1000" value="50" id="prize-min" ><br />
                    <label class="filter-parameter-text">Prezzo minimo: €<span id="min"></span></label>
                </div>
                <div class="filter-parameter-container">
                    <input name="" type="range" min="1" max="1000" value="900" id="prize-max"><br />
                    <label class="filter-parameter-text">Prezzo massimo: €<span id="max"></span></label>
                </div>
                <label class="filter-error-container" id="filter-error-prices"></label>
            </section>

            <section class="filter-section">
                {{ Form::label('', 'Periodo', ['class' => 'filter-title-label']) }}
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
                    <label class="filter-parameter-text">Seleziona Tipologia Casa</label>
                    {{ Form::select('', array('0' => 'Appartamento & Posto Letto', '1' => 'Appartmento', '2' => 'Posto Letto'), '0', array('class' => 'input', 'id' => 'filter-type-house')) }}

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
                <label class="filter-error-container" id="filter-error-dates"></label>
            </section>


            {{ Form::reset('Annulla', ['class' => 'submit middable_submit', 'id' => 'chat-submit']) }}
            {{ Form::submit('🔍 Cerca', ['class' => 'submit middable_submit', 'id' => 'chat-submit']) }}
        {{ Form::close() }}

        <div class="products_container" id="sections-container">

            <article class="house-content" id="{{"product.id"}}">
                @if(false) <!-- not clickable for not authed users -->
                <a href="{{"item.php?"}}">
                    @endif
                    <h2 class="house-title">Bellissima casa in riva al mare a Positano</h2>
                    <section class="house-info">
                        <img src="{{"media/house-7.png"}}" class="house-image" />
                        <section class="house-allinfo">
                            <label class="house-detail">
                                Indirizzo: Via Altotting, 37 - Loreto (AN)
                            </label>
                            <br />
                            <label class="house-detail">
                                Area: 80 m.q.
                            </label>
                            <br />
                            <label class="house-detail">
                                Stanze: 5
                            </label>
                            <br />
                            <label class="house-detail" id="house-price">
                                Affitto: € 240.00 / MM
                            </label>
                            </ul>
                        </section>
                        @if(false) <!-- not clickable for not authed users -->
                </a>
                @endif
            </article>

            <article class="house-content" id="{{"product.id"}}">
                @if(false) <!-- not clickable for not authed users -->
                <a href="{{"item.php?"}}">
                    @endif
                    <h2 class="house-title">Rigogliosa palazzina in un quartiere di nuova costruzione</h2>
                    <section class="house-info">
                        <img src="{{"media/house-8.png"}}" class="house-image" />
                        <section class="house-allinfo">
                            <label class="house-detail">
                                Indirizzo: Via Alfieri, 9 - Appignano (MC)
                            </label>
                            <br />
                            <label class="house-detail">
                                Area: 110 m.q.
                            </label>
                            <br />
                            <label class="house-detail">
                                Stanze: 6
                            </label>
                            <br />
                            <label class="house-detail" id="house-price">
                                Affitto: € 300.00 / MM
                            </label>
                            </ul>
                        </section>
                        @if(false) <!-- not clickable for not authed users -->
                </a>
                @endif
            </article>

            <article class="house-content" id="{{"product.id"}}">
                @if(false) <!-- not clickable for not authed users -->
                <a href="{{"item.php?"}}">
                    @endif
                    <h2 class="house-title">Appartamento in condominio in zona residenziale</h2>
                    <section class="house-info">
                        <img src="{{"media/house-9.png"}}" class="house-image" />
                        <section class="house-allinfo">
                            <label class="house-detail">
                                Indirizzo: Via Einaudi, 1/Z - Castelfidardo (AN)
                            </label>
                            <br />
                            <label class="house-detail">
                                Area: 50 m.q.
                            </label>
                            <br />
                            <label class="house-detail">
                                Stanze: 3
                            </label>
                            <br />
                            <label class="house-detail" id="house-price">
                                Affitto: € 150.00 / MM
                            </label>
                            </ul>
                        </section>
                        @if(false) <!-- not clickable for not authed users -->
                </a>
                @endif
            </article>
        </div>
    </div>
</div>

@include('footer')