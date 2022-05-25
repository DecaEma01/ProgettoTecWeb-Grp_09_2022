<link rel="stylesheet" type="text/css" href="{{ asset('css/global.css') }}" >
<link rel="stylesheet" type="text/css" href="{{ asset('css/house.css') }}" >

@include('menu')

<div class="container large-container">
    <div class="title">Aggiungi un nuovo Annuncio</div>
    <div class="container-content">
        <div class="container full-container" >
            <p class="text">Inserisci un'immagine</p>
            <div class="house-images-container">
                <div class="house-item">
                    <input type="file" id="image1" accept="image/png, image/jpeg" class="house-file" placeholder="Seleziona un'immagine" required />
                    <img src="Media/image.png" id="img1" class="house-image" />
                    <label class="house-image-name" id="label1"></label>
                </div>
            </div>

            <p class="text">Indirizzo</p>
            <input type="text" class="input" id="Indirizzo" placeholder="Indirizzo" required />

            <br><br>
            <p class="text">Tipologia</p>
            <select class="input select" id="type" required>
                <option value="none" class="option">Seleziona una Tipologia...</option>
            </select>

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
             <input type="text" class="input" id="superficie" placeholder="Superficie" required />


            <br><br>
            <p class="text">Numero stanze</p>
            <input type="number" class="input" id="Nstanze" placeholder="Numero Stanze" required />



            <br><br>

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


            <br><br>
            <p class="text">Piano</p>
            <select class="input select" id="piano" required>
                <option value="none" class="option">Seleziona Piano...</option>
            </select>

            <br><br>
            <p class="text">Data disponibilitÃ </p>
            <!--
               sentire massi per formato data
               -->
            <p>da: </p>
            <div class='house-dec-container'>
               <input type="date" class=" input" value="2022-06-01">
            </div>
            <p>a: </p>
            <div class='house-dec-container'>

               <input type="date" class=" input " value="2022-07-01">
            </div>

            <br><br>
            <p class="text">Prezzo</p>
            <input type="number" class="input" id="price" placeholder="Scegli il prezzo" required />

            <!--non dovrebbe servire dopo la togliamo
                <br><br>
                <div class='item-desc' id='item-desc'>
                        descrizione dell'immagine
                 </div>-->

            <div class='submit' id="house-inserisci">
                Inserisci
            </div>
        </div>
    </div>
</div>


@include('footer')