@extends('layouts.app')

@section('content')

<!-- /.login-logo -->
<div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Connectez-vous pour démarrer votre session</p>

      <form action="{{ route('login') }}" method="post">
      @csrf
        <div class="input-group mb-3">
          <input type="email" class="form-control" id="email" class="form-control @error('email') is-invalid @enderror" 
                            name="email" value="{{ old('email') }}" required autocomplete="email" autofocus 
                            placeholder="{{ __(' Addresse E-Mail') }}">
          @if($errors->has('email'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('email') }}</strong>
            </span>
          @endif
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input  id="password" type="password" class="form-control @error('password') is-invalid @enderror" 
                                name="password" required autocomplete="current-password"
                                placeholder="{{ __('Mot de passe') }}">
          @if($errors->has('password'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('password') }}</strong>
            </span>
          @endif
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input  class="form-check-input" type="checkbox" id="remember" {{ old('remember') ? 'checked' : '' }}>
              <label  class="form-check-label" for="remember">
              {{ __('Se souvenir de moi') }}
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">{{ __('Valider') }}</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <p class="mb-1">
      @if (Route::has('password.request'))
        <a href="{{ route('password.request') }}">J'ai oublié mon mot de passe</a>
        @endif
      </p>
      <p class="mb-0">
        <a href="{{ route('register') }}" class="text-center">Inscrire un nouveau membre</a>
      </p>
    </div>
    <!-- /.login-card-body -->
  </div>

@endsection