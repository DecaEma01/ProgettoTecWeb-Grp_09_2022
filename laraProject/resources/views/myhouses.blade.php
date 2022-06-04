<link rel="stylesheet" type="text/css" href="{{ asset('css/global.css') }}" >
<link rel="stylesheet" type="text/css" href="{{ asset('css/catalog.css') }}" >
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="{{asset('js/catalog.js')}}" ></script>

@include('menu')

<div class="container full-container">
    <div class="container-content">
        <div class="products_container" id="sections-container">
            @isset($myhouses)
                @foreach ($myhouses as $house)
                    <a href="<?php echo "editHouseForm/".$house->id_casa; ?>" class="house-content">
                        <h2 >{{ $house->titolo }}</h2>
                        <section class="house-info">
                            @if(($house->foto)!=null)
                            <img src="{{asset('images/'.$house->foto)}}" class="house-image" />
                            @else
                            <img src="{{asset('images/'.'default.png')}}" class="house-image" />
                            @endif

                            <section class="house-allinfo">
                                <label class="house-detail">
                                    Regione: {{ $house->regione }}
                                </label>
                                <br>
                                <label class="house-detail">
                                    Città: {{ $house->citta }}
                                </label>
                                <br>
                                <label class="house-detail">
                                    Via: {{( $house->via )}}
                                </label>
                                <br>
                                <label class="house-detail">
                                    Mq: {{ $house->mq }}
                                </label>
                                <br>
                                <label class="house-detail">
                                    Data inizio disponibilità: {{ date('Y/m/d', $house->data_inizio) }}
                                </label>
                                <br>
                                <label class="house-detail">
                                    Data fine disponibilità: {{ date('Y/m/d', $house->data_fine) }}
                                </label>
                                <br>
                                <label class="house-detail" id="house-price">
                                    € {{ $house->prezzo }}
                                </label>
                            </section>
                        </section>
                    </a>
                @endforeach()
            @endisset()
            @empty($myhouses)
                {{ Form::label('', 'Non hai ancora nessuna casa', ['class' => 'input'])}}
            @endempty()

        </div>
        <a href="{{route('newHouseForm')}}" class="submit middable_submit'">Inserisci un nuovo annuncio</a>
    </div>
</div>

@include('footer')