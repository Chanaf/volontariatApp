@extends('layouts.user')

@section('title', 'Compte')

@section('content')
<section class="intro">
		<div class="container intro-compte">
			<div class="row">
        <div class="col-md-3">
          <!-- Profile Image -->
          <div class="card card-primary card-outline">
            <div class="card-body box-profile">
              <div class="text-center">
                <img class="profile-user-img img-fluid img-circle" src="../../dist/img/user4-128x128.jpg"
                      alt="User profile picture">
              </div>
              <h3 class="profile-username text-center">
                {{ $volontaire->name.' '.$volontaire->prenom }}
              </h3>
              <p class="text-muted text-center">
                {{ $volontaire->role}}
              </p>

              <ul class="list-group list-group-unbordered mb-3">
                <li class="list-group-item">
                  <b>Téléphone</b> <a class="float-right">{{ $volontaire->telephone }}</a>
                </li>
                <li class="list-group-item">
                  <b>E-mail</b> <a class="float-right">{{ $volontaire->email }}</a>
                </li>
              </ul>
              <a class="btn btn-danger" href="{{ route('logout') }}" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();"> 
                    <i class="fa fa-power-off"></i>
              <!-- Message Start -->
                    {{ __('Se déconnecter') }}
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                      @csrf
                    </form>
              <!-- Message End -->
            </a>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <div class="col-md-4">
          <div class="card-body">
            <div class="tab-content">
              <div class="tab-pane active" id="settings">
                <form class="form-horizontal">
                  <div class="form-group row">
                    <label for="inputName" class="col-sm-5 col-form-label">Nom</label>
                    <div class="col-sm-7">
                      <input type="text" class="form-control @error('name') is-invalid @enderror" 
                              name="name" value="{{ $volontaire->name }}" required autocomplete="name" 
                              placeholder="{{ __('Nom') }}" autofocus>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="prenom" class="col-sm-5 col-form-label">Prénom</label>
                    <div class="col-sm-7">
                      <input type="text" class="form-control @error('prenom') is-invalid @enderror" 
                            name="prenom" value="{{ $volontaire->prenom }}" required autocomplete="prenom" 
                            placeholder="{{ __('Prénom') }}" autofocus>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="role" class="col-sm-5 col-form-label">Rôle</label>
                    <div class="col-sm-7">
                      <input type="text" class="form-control @error('role') is-invalid @enderror" 
                            name="role" value="{{ $volontaire->role }}" required autocomplete="role" 
                            placeholder="{{ __('Rôle') }}" autofocus>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputExperience" class="col-sm-5 col-form-label">Téléphone</label>
                    <div class="col-sm-7">
                      <input type="number" class="form-control @error('telephone') is-invalid @enderror" 
                              name="telephone" value="{{ $volontaire->telephone }}" required autocomplete="telephone" 
                              placeholder="{{ __('Téléphone') }}" autofocus>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputEmail" class="col-sm-5 col-form-label">Email</label>
                    <div class="col-sm-7">
                      <input type="email" class="form-control @error('email') is-invalid @enderror" 
                              name="email" value="{{ $volontaire->email }}" required autocomplete="email"
                              placeholder="{{ __('Addresse E-Mail ') }}">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputSkills" class="col-sm-5 col-form-label">Mot de passe</label>
                    <div class="col-sm-7">
                      <input type="password" class="form-control @error('password') is-invalid @enderror" 
                                name="password" required autocomplete="new-password" placeholder="{{ __('Mot de passe') }}">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputSkills" class="col-sm-5 col-form-label">Confirmation</label>
                    <div class="col-sm-7">
                      <input type="password" class="form-control" name="password_confirmation" required 
                              autocomplete="new-password" placeholder="{{ __('Confirmation Mot de passe') }}">
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="offset-sm-2 col-sm-10">
                      <button type="submit" class="btn btn-primary">Modifier</button>
                    </div>
                  </div>
                </form>
              </div>
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div><!-- /.card-body -->
        </div>
        <div class="col-md-4">





        </div>
    </div>
	</div>		
</section>

@endsection