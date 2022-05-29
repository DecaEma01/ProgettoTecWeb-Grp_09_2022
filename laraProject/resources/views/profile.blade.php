<link rel="stylesheet" type="text/css" href="{{ asset('css/global.css') }}" >
<link rel="stylesheet" type="text/css" href="{{ asset('css/profile.css') }}" >
@include('menu')
<div class="container large-container">
    <div class="title">Profilo</div>
    <div class="container-content">
        <a class="submit middable_submit profile_button" href="{{'myinfo'}}"><img id="profile-button-image-user" class="profile_image_button">I miei Dati</a>
        <!--@can('isAdmin') @endcan-->
        @can('isUser2')
        <a class="submit middable_submit profile_button" href="{{'previews'}}"><img id="profile-button-image-chat" class="profile_image_button">Chat</a>
        <a class="submit profile_button" href="{{'ciao'}}"><img id="profile-button-image-myhouses" class="profile_image_button">Le mie Case</a>
        @endcan
        @can('isUser1')
        <a class="submit middable_submit profile_button" href="{{'previews'}}"><img id="profile-button-image-chat" class="profile_image_button">Chat</a>
        <a class="submit profile_button" href="{{'ciao'}}"><img id="profile-button-image-requests" class="profile_image_button">Le mie Richieste</a>
        @endcan
        @can('isAdmin')
        <a class="submit middable_submit profile_button" href="{{'stats'}}"><img id="profile-button-image-stats" class="profile_image_button">Statistiche</a>
        <a class="submit profile_button" href="{{'faqs'}}"><img id="profile-button-image-faq" class="profile_image_button">F.A.Q.</a>
        @endcan
        <a class="submit middable_submit" href="{{ route('logout') }}">Esci</a>
        <a class="submit middable_submit" href="{{'ciao'}}">Elimina il mio Profilo</a>
    </div>
</div>
@include('footer')