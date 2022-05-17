<link rel="stylesheet" type="text/css" href="{{ asset('css/global.css') }}" >
<link rel="stylesheet" type="text/css" href="{{ asset('css/catalog.css') }}" >
@include('menu')

<div class="container full-container">
    <div class="container-content">
        @if(false) <!-- do not show to not authed users -->
        <input type="text" class="search_input" id="searchText" placeholder="Cerca per nome o per codice articolo" onkeyup="attempt_search()" />
        <label class="link_text" id="fo" onclick="toggleFO()">
            Nascondi Filtri & Ordinamenti
        </label>
        <select class="input fouthable_input select" id="category" onchange="attempt_search()">
            <option value="none">Tutte le Categorie</option>
        </select>
        <select class="input fouthable_input select" id="brand" onchange="fillModelsSelect(); searchProducts()">
            <option value="none">Tutte le Marche</option>
        </select>
        <select class="input fouthable_input select" id="model" onchange="searchProducts()">
            <option value="none">Tutti i Modelli</option>
        </select>
        <select class="input fouthable_input select" id="sort" onchange="searchProducts()">
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
        @endif
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