<link rel="stylesheet" type="text/css" href="{{ asset('css/global.css') }}" >
<link rel="stylesheet" type="text/css" href="{{ asset('css/chat.css') }}" >

@include("menu")

<div class="container large-container">
    <div class="title">Steve Jobs</div>
    <div class="container-content">
        <form class="chat-newmessage">
            <input type="text" class="input search_input" autofocus placeholder="Testo del messaggio" />
            <input type="submit" class="submit middable_submit search_submit" value="🔎"/>
        </form>
        <div class="chat-container">
            <div class="chat-message" id="chat-message-me">
                <label class="chat-text">Ciao quanto vuoi per la casa?</label>
                <label class="chat-date">22.02.22 09:41</label>
            </div> 
        </div>
        <div class="chat-container">
            <div class="chat-message" id="chat-message-you">
                <label class="chat-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</label>
                <label class="chat-date">22.02.22 09:41</label>
            </div>
        </div>
        <div class="chat-container">
            <div class="chat-message" id="chat-message-you">
                <label class="chat-text">Prova messaggio multilinea, ogni messaggio occupa massimo il 60% della larghezza, e minimo 100px</label>
                <label class="chat-date">22.02.22 09:41</label>
            </div>
        </div>
        <div class="chat-container">
            <div class="chat-message" id="chat-message-me">
                <label class="chat-text">€</label>
                <label class="chat-date">22.02.22 09:41</label>
            </div> 
        </div>
    </div>
</div>

@include("footer")