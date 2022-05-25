<link rel="stylesheet" type="text/css" href="{{ asset('css/global.css') }}" >
<link rel="stylesheet" type="text/css" href="{{ asset('css/house.css') }}" >
<script src="{{asset('js/item.js')}}" ></script>

@include('menu')
<div class="container full-container" >
    <div class='house-content'>
        <div class='house-image-section'>
            <img class='house-image-container' id="house-image-container" />
            <div class='house-other-images-container' id="house-other-images-container">
            </div>
        </div>
        <div class="house-details-section">
            <div class="house-name-container">
                <div class='house-name' id='house-name'>
                    Qui il titolo della casa
                </div>


                <br><br>
                <p class="text">Indirizzo
                    <div class='house-dec' id='house-dec'>
                    Indirizzo
                    </div>
                </p>
            </div>


            <br><br>
            <p class="text">Tipologia</p>
            
            <div class='house-dec' id='house-dec'>
                Tipologia
            </div>
                

            <br><br>
            <p class="text">Servizi Inclusi</p>

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

            <br><br>
            <p class="text">Superficie</p>
            <div class='house-dec-container'>
                <div class='house-dec' id='house-dec'>
                    80mq
                </div>
            </div>
            <!--<a href='materials.php?id=$materialId'>
                <div class='item-category' id='item-category'>
                    Categoria: $categoryName
                </div>
            </a>-->
            <br><br>
            <p class="text">Numero stanze</p>
            <div class='house-dec-container'>
                <div class='house-dec' id='dec-price'>
                    6
                </div>
            </div>


            <br><br>

            <p class="text">Arredamento</p>
            <div class=checkbox-content>
                <div class="checkbox2">
                    <input type="checkbox"  id="Sarredamento_checkbox" name="Sarredamento_checkbox" />
                    <label for="si">Si</label>
                </div>
                <div class="checkbox2">
                    <input type="checkbox"  id="Narredamento_checkbox" name="Narredamento_checkbox" />
                    <label for="No">No</label>
                </div>
            </div>


            <br><br>
            <p class="text">Piano</p>
            <div class='house-dec' id='house-dec'>
                   Piano
            </div>

            <br><br>
            <p class="text">Data disponibilità</p>
            <!--
               sentire massi per formato data
               -->
            <p>da: </p>
            <div class='house-dec' id='house-dec'>
                2022-06-01
            </div>

            <p>a: </p>
            <div class='house-dec' id='house-dec'>
                2022-07-01
            </div>

            <br><br>
            <p class="text">Prezzo</p>
            <div class='house-dec-container'>
                
                <div class='house-dec' id='house-dec'>
                    400 € 
                </div>
                
            </div>
            <!--non dovrebbe servire dopo la togliamo
                <br><br>
                <div class='item-desc' id='item-desc'>
                        descrizione dell'immagine
                 </div>-->
          
            <br />
            <div class='submit' id="house-option">
                Opziona
            </div>
        </div>   
    </div>
</div>

@include('footer')