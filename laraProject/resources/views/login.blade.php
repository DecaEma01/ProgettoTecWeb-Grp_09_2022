<link rel="stylesheet" type="text/css" href="{{ asset('css/global.css') }}" >
@include('menu')
<div class="container">
    <div class="title">
        Accedi
    </div>
    <form class="container-content">
        <input type="mail" class="input" name="mail" id="mail" placeholder="E-mail">
        <input type="password" class="input" name="password" id="password" placeholder="Password">
        <div class="submit" onclick="prepare_login()">Entra</div>
        <br>
        <hr class="content_separator">
        <br>
        <a href="{{"signup"}}"><div class="submit alternative_submit">Registrati</div></a>
    </form>
</div>
@include('footer')