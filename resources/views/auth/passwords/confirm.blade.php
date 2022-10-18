@extends('layouts.app')

@section('title', 'Home')

@section('content')

<!-- User name -->
<div class="lockscreen-name" style="font-weight: 600; text-align: center;">
    {{Auth::user()->name.' '.Auth::user()->prenom  }} 
</div>

<!-- START LOCK SCREEN ITEM -->
<div class="lockscreen-item">
  <!-- lockscreen image -->
    <div class="lockscreen-image">
        <img src="{{url('/')}}/dist/img/user1-128x128.jpg" alt="User Image">
    </div>
    <!-- /.lockscreen-image -->

    <!-- lockscreen credentials (contains the form) -->
    <form class="lockscreen-credentials" method="POST" action="{{ route('password.confirm') }}">
    @csrf
        <div class="input-group">
            <input type="password" class="form-control @error('password') is-invalid @enderror" 
                    name="password" required autocomplete="current-password" placeholder="{{ __('Mot de passe') }}">

            @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror

            <div class="input-group-append">
                <button type="submit" class="btn">
                    <i class="fas fa-arrow-right"></i>
                </button>
            </div>
        </div>
    </form>
    <!-- /.lockscreen credentials -->
</div>
<!-- /.lockscreen-item -->
<div class="help-block text-center">
    Entrer votre mot de passe pour recupérer votre session.
</div>

<div class="text-center">
    @if (Route::has('password.request'))
    <a class="btn btn-link" href="{{ route('password.request') }}">
        {{ __('J\'ai oublié mon mot de passe.') }}
    </a>
    @endif
</div>
<div class="text-center">
    <a href="{{route('login')}}">Ou se connecter sur un autre compte</a>
</div>

@endsection