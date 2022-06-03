<link rel="stylesheet" type="text/css" href="{{ asset('css/global.css') }}" >
<link rel="stylesheet" type="text/css" href="{{ asset('css/catalog.css') }}" >
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="{{asset('js/catalog.js')}}" ></script>

@include('menu')

        @isset($listaCase)
        @foreach ($listaCase as $casa)
        <div class="products_container" id="sections-container">

            <br>
            <br>
            <article class="house-content" id="{{$casa->id}}">
                @if(false) <!-- not clickable for not authed users -->
                <a href="{{"item.php?"}}">
                @endif
               
                    <h2 class="house-title">{{$casa->titolo}}</h2>
                    <section class="house-info">
                        @if($casa->foto!=null)
                        <img src="{{asset('images/'.$casa->foto)}}" class="house-image" />
                        @else
                        <img src="{{asset('images/'.'default.png')}}" class="house-image" />
                        @endif

                        <section class="house-allinfo">
                            </ul>
                            <label class="house-detail">
                                Regione:{{ucfirst($casa->regione)}}
                            </label>
                            <br>
                            <label class="house-detail">
                                Città:{{ucfirst($casa->citta)}}
                            </label>
                            <br>
                            <label class="house-detail">
                                Via:{{ucfirst($casa->via)}}
                            </label>
                            <br>
                            <label class="house-detail">
                                Mq:{{$casa->mq}}
                            </label>
                            <br>
                            <label class="house-detail">
                                Data inizio disponibilità:{{gmdate("Y-m-d", $casa->data_inizio)}}
                            </label>
                            <br>
                            <label class="house-detail">
                                Data fine disponibilità:{{gmdate("Y-m-d", $casa->data_fine)}}
                            </label>
                            <br>
                            <label class="house-detail">
                                Tipologia:
                                @if ($casa->tipo==1)
                                Appartamento
                                @endif
                                @if ($casa->tipo==0)
                                Posto letto
                                @endif
                              
                            </label>
                            <br>
                            <label class="house-detail" id="house-price">
                                €{{$casa->prezzo}}
                            </label>
                            </ul>
                        </section>
                        @if(false) <!-- not clickable for not authed users -->
                </a>
                @endif
            </article>

        @endforeach()
            
        @endisset()

            <!--
            <article class="house-content" id="{{"product.id"}}">
                @if(false) 
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
                        @if(false) 
                </a>
                @endif
            </article>

            <article class="house-content" id="{{"product.id"}}">
                @if(false) 
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
                        @if(false) 
                </a>
                @endif
            </article>
            -->
        </div>
    </div>
</div>


@include('footer')