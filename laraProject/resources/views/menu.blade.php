<link rel="stylesheet" type="text/css" href="{{ asset('css/menu.css') }}" >
<?php use Illuminate\Support\Facades\Auth ?>
<div class="menu">
    <a href="{{"index"}}">
        <div class="item" id="logo-item">
            <img class="menu-toggle-button" id="menu-toggle-button" onclick="toggleMenu()" />
                <img src="{{asset('media/logoHouseFinder.png')}}" class="menu-logo"/>
        </div>
    </a>
    <a href="{{"catalog"}}">
        <div class="item">
            CASE
        </div>
    </a>
    <a id="account_link" href="{{"login"}}">
        <div class="item">
            <div id="login_text">
                @if(null !== Auth::user())
                    <?php echo Auth::user()->user;?>
                @endif()
                @if(null === Auth::user())
                    LOGIN
                @endif()
            </div>
        </div>
    </a>
</div>