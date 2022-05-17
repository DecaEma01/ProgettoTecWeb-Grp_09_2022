<link rel="stylesheet" type="text/css" href="{{ asset('css/global.css') }}" >
<link rel="stylesheet" type="text/css" href="{{ asset('css/profile.css') }}" >
@include('menu')
<div class="container large-container">
    <div class="title">Profilo</div>
    <div class="container-content">
        <a class="submit middable_submit profile_button" href="{{'ciao'}}"><img id="profile-button-image-user" class="profile_image_button">I miei Dati</a>

        <!--Profile Locatore-->
        @if (true)
        <a class="submit middable_submit profile_button" href="{{'ciao'}}"><img id="profile-button-image-chat" class="profile_image_button">Chat</a>
        <a class="submit profile_button" href="{{'ciao'}}"><img id="profile-button-image-myhouses" class="profile_image_button">Le mie Case</a>
        @endif

        <!--Profile Locatario-->
        @if (false)
        <a class="submit middable_submit profile_button" href="{{'ciao'}}"><img id="profile-button-image-chat" class="profile_image_button">Chat</a>
        <a class="submit profile_button" href="{{'ciao'}}"><img id="profile-button-image-requests" class="profile_image_button">Le mie Richieste</a>
        @endif

        <!--Profile Admin-->

        @if (falso)
        <a class="submit middable_submit profile_button" href="{{'ciao'}}"><img id="profile-button-image-stats" class="profile_image_button">Statistiche</a>
        <a class="submit profile_button" href="{{'ciao'}}"><img id="profile-button-image-faq" class="profile_image_button">F.A.Q.</a>
        @endif
        <a class="submit middable_submit" href="{{'ciao'}}">Esci</a>
        <a class="submit middable_submit" href="{{'ciao'}}">Elimina il mio Profilo</a>
    </div>
</div>
@include('footer')