<link rel="stylesheet" type="text/css" href="{{ asset('css/global.css') }}" >
<link rel="stylesheet" type="text/css" href="{{ asset('css/stats.css') }}" >
<script src="{{asset('js/stats.js')}}" ></script>
@include("menu")

<div class="container large-container">
    <div class="title">Statistiche</div>
    <div class="container-content">
        <form class="stats-form">
            <input type="date" class="input middable_input" id="start_date" placeholder="Data Inizio"/>
            <input type="date" class="input middable_input" id="end_date" placeholder="Data Fine"/>
            <input type="submit" class="submit" value="Filtra" onclick="checkDates()" />
        </form>
        <br>
        <div class="stats-content">
            <label class="stats-element">
                Numero Case in Affitto: 350
            </label>
            <label class="stats-element">
                Numero Richieste: 500
            </label>
            <label class="stats-element">
                Numero Utenti: 1200
            </label>
        </div>
    </div>
</div>

@include("footer")