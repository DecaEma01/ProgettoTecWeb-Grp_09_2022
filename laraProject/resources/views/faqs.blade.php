<link rel="stylesheet" type="text/css" href="{{ asset('css/global.css') }}" >
<link rel="stylesheet" type="text/css" href="{{ asset('css/previews.css') }}" >

@include('menu')

<div class="container large-container">
    <div class="title">FAQs</div>
    <div class="container-content">
        @foreach($faqs as $faq)
            <a href="{{route('faq', ['id_faq' => $faq -> id_faq])}}" class="preview-container">
                <label class="preview-title">
                    {{ $faq -> domanda }}
                </label>
                <label class="preview-message">
                    {{ $faq -> risposta }}
                </label>
            </a>
        @endforeach
        <a href="{{route('new-faq')}}" class="submit middable_submit'">Inserisci una nuova FAQ</a>     
    </div>
       
</div>

@include('footer')