<link rel="stylesheet" type="text/css" href="{{ asset('css/global.css') }}" >
<link rel="stylesheet" type="text/css" href="{{ asset('css/signup.css') }}" >
<script src="{{asset('js/signup.js')}}" ></script><!--questo inutile per ora-->

@include('menu')

<div class="container large-container">
    <div class="title">I miei dati</div>
    <div class="container-content">
        <input type="text" class="input middable_input" name="name" id="name" placeholder="Nome ">
        <input type="text" class="input middable_input" name="surname" id="surname" placeholder="Cognome">
        <input type="text" class="input" name="e-mail" id="e-mail" placeholder="E-mail">
        @if (true)
        <select class="input middable_input input_lessee" name="gender" id="gender">
            <option value="0">Seleziona Genere</option>
            <option value="1">Uomo</option>
            <option value="2">Donna</option>
        </select>
        <input type="number" class="input middable_input input_lessee" name="age" id="age" placeholder="Età">
        @endif
        <br>
        <hr class="content_separator">
        <br>
        <div class="submit alternative_submit middable_submit" onclick="window.location.replace('profile.php')">Annulla</div>

        <div class="submit middable_submit" onclick="prepare_save()">Salva</div>
    </div>
</div>

@include('footer')