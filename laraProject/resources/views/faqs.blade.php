<link rel="stylesheet" type="text/css" href="{{ asset('css/global.css') }}" >
<link rel="stylesheet" type="text/css" href="{{ asset('css/previews.css') }}" >

@include('menu')

<div class="container large-container">
    <div class="title">FAQs</div>
    <div class="container-content">
        <a href="{{"faq?id="}}" class="preview-container">
            <label class="preview-title">
                Come faccio a registrarmi?
            </label>
            <label class="preview-message">
                Per registrarti, ti basta cliccare su LOGIN e poi su registrati.
            </label>
        </a>
        <a href="{{"faq?id="}}" class="preview-container">
            <label class="preview-title">
                Come faccio a loggarmi?
            </label>
            <label class="preview-message">
                Per registrarti, ti basta cliccare su LOGIN.
            </label>
        </a>
    </div>
</div>

@include('footer')