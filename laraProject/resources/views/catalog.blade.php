<link rel="stylesheet" type="text/css" href="{{ asset('css/global.css') }}" >
<link rel="stylesheet" type="text/css" href="{{ asset('css/catalog.css') }}" >

@include('menu')
<div class="container full-container">
    <div class="container-content">
        <!-- do not show to not authed users -->
        <input type="text" class="search_input" id="searchText" placeholder="Cerca per nome o per codice articolo" onkeyup="attempt_search()" />
        <label class="link_text" id="fo" onclick="toggleFO()">
            Nascondi Filtri & Ordinamenti
        </label>
        <select class="input input_lessee" name="type" id="type">
            <option value="0">tipologia appartamento</option>
            <option value="1">Appartamento</option>
            <option value="2">Posto Letto</option>
        </select>
        <p class="text">Seleziona un range di prezzo:</p>
        <br><br>
        <div class="slidecontainer">
            <input type="range" min="1" max="1000" value="50" id="prize-min">
            <p>Prezzo minimo: <span id="min"></span></p>
        </div>
        <br><br>
        <div class="slidecontainer">
            <input type="range" min="1" max="1000" value="50" id="prize-max">
            <p>Prezzo massimo: <span id="max"></span></p>
        </div>

        <script>
            var slidermin = document.getElementById("prize-min");
            var outputmin = document.getElementById("min");
            var slidermax = document.getElementById("prize-max");
            var outputmax = document.getElementById("max");

            outputmin.innerHTML = slidermin.value;
            outputmax.innerHTML = slidermax.value;

            slidermin.oninput = function() {
                outputmin.innerHTML = this.value;
            }
            slidermax.oninput = function() {
                outputmax.innerHTML = this.value;
            }
        </script>


        @if(true)<!--filtri se seleziono appartamento-->
        <input type="number" class="input input_lessee" name="dimension" id="dimension" placeholder="Dimensioni">
        <input type="number" class="input middable_input" name="room" id="room" placeholder="Numero di stanze">
        <input type="number" class="input middable_input" name="bed" id="bed" placeholder="Numero di posti letto">

        <br><br>
        <p class="text">Servizi Inclusi appartamento</p>
        <div class="checkbox-content">
            <div class="checkbox2">
                <input type="checkbox" id="wifi"  />
                <label for="wifi">Wifi</label>
            </div>
            <div class="checkbox2">
                <input type="checkbox" id="tv"  />
                <label for="Tv">TV</label>
            </div>

            <div class="checkbox2">
                <input type="checkbox" id="terrazza"   />
                <label for="Terrazza">Terrazza</label>
            </div>
        </div>
        @endif

        @if(true)<!--filtri se seleziono posto letto-->
        <input type="number" class="input middable_input" name="dimension-room" id="dimension-room" placeholder="Dimensioni della stanza">
        <input type="number" class="input middable_input" name="room" id="room" placeholder="Numero di letti in camera">

        <p class="text">Servizi Inclusi posto letto</p>
        <div class="checkbox-content">
            <div class="checkbox2">
                <input type="checkbox" id="wifi"  />
                <label for="wifi">Wifi</label>
            </div>
            <div class="checkbox2">
                <input type="checkbox" id="tv"  />
                <label for="Tv">TV</label>
            </div>

            <div class="checkbox2">
                <input type="checkbox" id="terrazza"   />
                <label for="Terrazza">Terrazza</label>
            </div>
            <div class="checkbox2">
                <input type="checkbox" id="AngoloStudio"   />
                <label for="AngoloStudio">Angolo Studio</label>
            </div>
        </div>
        @endif

        <p class="text">Arredamento</p>
        <div class=checkbox-content>
            <div class="checkbox2">
                <input type="radio"  id="Sarredamento_checkbox" name="Sarredamento_checkbox" />
                <label for="si">Si</label>
            </div>
            <div class="checkbox2">
                <input type="radio"  id="Narredamento_checkbox" name="Narredamento_checkbox" />
                <label for="No">No</label>
            </div>
        </div>

        <p>da: </p>
        <div class='house-dec-container'>
            <input type="date" class=" input" value="2022-06-01">
        </div>
        <p>a: </p>
        <div class='house-dec-container'>

            <input type="date" class=" input " value="2022-07-01">
        </div>

        <select class="input input_lessee" id="sort" onchange="searchProducts()">
            <option value="0">Ordina - nome crescente</option>
            <option value="1">Ordina - nome descrescente</option>
            <option value="2">Ordina - prezzo crescente</option>
            <option value="3">Ordina - prezzo decrescente</option>
        </select>

        <!--<button class="search_submit" onclick="prepare_searchProducts()">
            <img src="Media/search.png" class="button_image" />
        </button>-->

        <div class="products_container" id="products-container" style="display: none">
        </div>

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
