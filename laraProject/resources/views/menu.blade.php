<link rel="stylesheet" type="text/css" href="{{ asset('css/menu.css') }}" >
<div class="menu">
    <div class="item" id="logo-item">
        <img class="menu-toggle-button" id="menu-toggle-button" onclick="toggleMenu()" />
        <a href="index.php">
            <img src="{{asset('media/logoHouseFinder.png')}}" class="menu-logo"/>
        </a>
    </div>
    <a href="catalog.php">
        <div class="item">
            CASE
        </div>
    </a>
    <a id="account_link" href="account.php">
        <div class="item">
            <div id="login_text">
                LOGIN
            </div>
        </div>
    </a>
</div>