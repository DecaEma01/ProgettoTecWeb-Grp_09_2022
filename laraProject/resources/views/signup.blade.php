<link rel="stylesheet" type="text/css" href="{{ asset('css/global.css') }}" >
<link rel="stylesheet" type="text/css" href="{{ asset('css/signup.css') }}" >
<script src="{{asset('js/signup.js')}}" ></script>
@include('menu')
<div class="container">
    <div class="title">
        Registrazione
    </div>
    <form class="container-content">
        <div id="radios">
        <input id="rad1" type="radio" name="radioBtn" class="myRadios" checked onchange="radioChangedValue(this.id)">
        <label class="labels" for="rad1">Locatario</label>
        <input id="rad2" type="radio" name="radioBtn" class="myRadios" onchange="radioChangedValue(this.id)">
        <label class="labels" for="rad2">Locatore</label>
        <div id="bckgrnd"></div>
        </div>
        <p id="desc_locatario">
            Da locatario puoi visualizzare l'intero catalogo delle case disponibili e metterti in contatto direttamente coi locatori
        </p>
        <p id="desc_locatore">
            Da locatore puoi inserire le tue case e/o posti letto e metterti in contatto direttamente coi locatori eventualmente interessati
        </p>

        <!---dati locatario--->

        <input type="text" class="input" name="name" id="name" placeholder="Nome">
        <input type="text" class="input" name="surname" id="surname" placeholder="Cognome">
        <input type="mail" class="input" name="email" id="email" placeholder="Email">
        <input type="password" class="input" name="password" id="password" placeholder="Password">
        <input type="password" class="input" name="repeat_password" id="repeat_password" placeholder="Ripeti Password">
        <select class="input input_lessee" name="gender" id="gender">
            <option value="0">Seleziona Genere</option>
            <option value="1">Uomo</option>
            <option value="2">Donna</option>
        </select>
        <input type="number" class="input input_lessee" name="age" id="age" placeholder="Età">

        <input type="checkbox" class="checkbox" id="terms_checkbox" name="terms_checkbox" /><div class="checkbox_text">Accetto i <a href="terms.php">Termini e le Condizioni</a></div>
        <input type="checkbox" class="checkbox" id="privacy_checkbox" name="privacy_checkbox" /><div class="checkbox_text">Accetto la <a href="privacy.php">Privacy Policy</a></div>
        <br><br><br><br>
        <div class="submit" onclick="prepare_createUser()">Registrami</div>
        <br>
        <hr class="content_separator">
        <br>
        <a href="{{"login"}}"><div class="submit alternative_submit">Effettua l'accesso</div></a>
    </form>
</div>
@include('footer')