@extends('layouts.app')

@section('content')

<div class="card">
    <div class="card-body register-card-body">
        <p class="login-box-msg" >Devenir<b> Volontaire</b></p>

        <form action="{{ route('register') }}" method="post">
        @csrf
        
            <div class="input-group mb-3">
                <input type="text" class="form-control @error('name') is-invalid @enderror" 
                        name="name" value="{{ old('name') }}" required autocomplete="name" 
                        placeholder="{{ __('Nom') }}" autofocus>
                @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
                <div class="input-group-append">
                    <div class="input-group-text">
                        <span class="fas fa-user"></span>
                    </div>
                </div>
            </div>

            <div class="input-group mb-3">
                <input type="text" class="form-control @error('prenom') is-invalid @enderror" 
                        name="prenom" value="{{ old('prenom') }}" required autocomplete="prenom" 
                        placeholder="{{ __('Prénom') }}" autofocus>
                @error('prenom')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
                <div class="input-group-append">
                    <div class="input-group-text">
                        <span class="fas fa-user"></span>
                    </div>
                </div>
            </div>

            <div class="input-group mb-3">
                <input type="number" class="form-control @error('telephone') is-invalid @enderror" 
                        name="telephone" value="{{ old('telephone') }}" required autocomplete="telephone" 
                        placeholder="{{ __('Téléphone') }}" autofocus>
                @error('telephone')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
                <div class="input-group-append">
                    <div class="input-group-text">
                        <span class="fas fa-phone"></span>
                    </div>
                </div>
            </div>

            <div class="input-group mb-3">
                <input type="text" class="form-control @error('role') is-invalid @enderror" 
                        name="role" value="{{ old('role') }}" required autocomplete="role" 
                        placeholder="{{ __('Profil') }}" autofocus>
                @error('role')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
                <div class="input-group-append">
                    <div class="input-group-text">
                        <span class="fas fa-file"></span>
                    </div>
                </div>
            </div>

            <div class="input-group mb-3">
                <input type="email" class="form-control @error('email') is-invalid @enderror" 
                        name="email" value="{{ old('email') }}" required autocomplete="email"
                        placeholder="{{ __('Addresse E-Mail ') }}">
                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
                <div class="input-group-append">
                    <div class="input-group-text">
                        <span class="fas fa-envelope"></span>
                    </div>
                </div>
            </div>

            <div class="input-group mb-3">
                <input type="password" class="form-control @error('password') is-invalid @enderror" 
                        name="password" required autocomplete="new-password" placeholder="{{ __('Mot de passe') }}">
                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
                <div class="input-group-append">
                    <div class="input-group-text">
                    <span class="fas fa-lock"></span>
                    </div>
                </div>
            </div>

            <div class="input-group mb-3">
                <input type="password" class="form-control" name="password_confirmation" required 
                        autocomplete="new-password" placeholder="{{ __('Confirmation Mot de passe') }}">
                <div class="input-group-append">
                    <div class="input-group-text">
                        <span class="fas fa-lock"></span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-8">
                    <div class="icheck-primary">
                        <input type="checkbox" id="agreeTerms" name="terms" value="agree" required>
                        <label for="agreeTerms">
                                J'accepte les 
                                <a href="#">conditions</a>
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
        <a href="{{route('login')}}" class="text-center">Je suis déjà membre</a>
    </div>
    <!-- /.form-box -->
</div><!-- /.card -->

@endsection
