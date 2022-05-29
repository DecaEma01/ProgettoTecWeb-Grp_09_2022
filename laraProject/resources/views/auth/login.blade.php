
<link rel="stylesheet" type="text/css" href="{{ asset('css/global.css') }}" >
@include('menu')
<div class="container">
    <div class="title">
        Accedi
    </div>
    {{ Form::open(array('route' => 'login', 'id' => 'login', 'class' => 'container-content')) }}
        {{ Form::text('user', '', ['class' => 'input','id' => 'user','placeholder' => 'Username']) }}
        @if ($errors->first('user'))
            <ul class="errors">
                @foreach ($errors->get('user') as $message)
                    <li>{{ $message }}</li>
                @endforeach
            </ul>
        @endif
        {{ Form::password('password', ['class' => 'input', 'id' => 'password','placeholder' => 'Password']) }}
                @if ($errors->first('password'))
                <ul class="errors">
                    @foreach ($errors->get('password') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
        
        {{ Form::submit('Entra', ['class' => 'submit']) }}
        <br>
        <hr class="content_separator">
        <br>
        
        <a href="{{ route('register') }}"><div class="submit alternative_submit">Registrati</div></a>
    {{ Form::close() }} 
</div>
@include('footer')

