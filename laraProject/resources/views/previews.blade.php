<link rel="stylesheet" type="text/css" href="{{ asset('css/global.css') }}" >
<link rel="stylesheet" type="text/css" href="{{ asset('css/previews.css') }}" >

@include("menu")

<div class="container large-container">
    <div class="title">Anteprime</div>
    <div class="container-content">
        <a href="{{"chat?id="}}" class="preview-container">
            <label class="preview-title">
                Max Piccinini
            </label>
            <label class="preview-message">
                Ciao vorrei avere info sulla casa grazie
            </label>
            <label class="preview-date">
                22.02.22 09:41
            </label>
        </a>
        <a href="{{"chat?id="}}" class="preview-container">
            <label class="preview-title">
                Steve Jobs
            </label>
            <label class="preview-message">
                Per la casa a Cupertino sono 99 cents
            </label>
            <label class="preview-date">
                22.02.09 09:41
            </label>
        </a>
        <a href="{{"chat?id="}}" class="preview-container">
            <label class="preview-title">
                Leonardo Da Vinci
            </label>
            <label class="preview-message">
                Cerco casa a Firenze, la tua è vicino alla fermata del bus?<br>
                Cerco casa a Firenze, la tua è vicino all'aeroporto?<br>
                Cerco casa a Firenze, la tua è vicino alla metro?<br>
                Cerco casa a Firenze, la tua è vicino alla fermata del bus?<br>
                Cerco casa a Firenze, la tua è vicino all'aeroporto?<br>
                Cerco casa a Firenze, la tua è vicino alla metro?
            </label>
            <label class="preview-date">
                22.02.54 09:41
            </label>
        </a>
    </div>
</div>

@include("footer")