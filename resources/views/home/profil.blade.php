@extends('layouts.admin')

@section('title', 'Home')

@section('content')

 <!-- Main content -->
 <section class="content">
      <div class="container-fluid">
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
                @if (Auth::guard('admin'))
                  {{ auth('admin')->user()->name.' '.auth('admin')->user()->prenom }}
                @elseif (Auth::guard('organisation'))
                  {{ auth('organisation')->user()->name}}
                @endif
                </h3>
                <p class="text-muted text-center">
                @if (Auth::guard('admin'))
                  {{ auth('admin')->user()->role }}
                @elseif (Auth::guard('organisation'))
                  {{ auth('organisation')->user()->domaine}}
                @endif
                </p>

                <ul class="list-group list-group-unbordered mb-3">
                  <li class="list-group-item">
                    <b>Téléphone</b> <a class="float-right">
                    @if (Auth::guard('admin'))
                      {{ auth('admin')->user()->telephone }}
                    @elseif (Auth::guard('organisation'))
                      {{ auth('organisation')->user()->telephone }}
                    @endif
                    </a>
                  </li>
                  <li class="list-group-item">
                    <b>E-mail</b> <a class="float-right">
                    @if (Auth::guard('admin'))
                      {{ auth('admin')->user()->email }}
                    @elseif (Auth::guard('organisation'))
                      {{ auth('organisation')->user()->email }}
                    @endif
                    </a>
                  </li>
                </ul>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
          <div class="col-md-9">
            <div class="card">
              <div class="card-header p-2">
                <ul class="nav nav-pills">
                  <li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab">Modifier</a></li>
                </ul>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content">
                  <div class="tab-pane active" id="settings">
                    <form class="form-horizontal" action="{{ route('update',$utilisateur->id) }}" method="POST">
                      <div class="form-group row">
                        <label for="inputName" class="col-sm-2 col-form-label">Nom</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" 
                                value="@if (Auth::guard('admin')){{ auth('admin')->user()->name }}@else{{ auth('organisation')->user()->name }}@endif" 
                                required autocomplete="name" placeholder="{{ __('Nom') }}" autofocus>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="domaine" class="col-sm-2 col-form-label">
                              @if (Auth::guard('admin'))
                                Prénom
                              @else
                                Domaine
                              @endif
                        </label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control @error('domaine') is-invalid @enderror" name="domaine" 
                                value="@if (Auth::guard('admin')){{ auth('admin')->user()->prenom }}@else{{ auth('organisation')->user()->domaine }}@endif" 
                                required autocomplete="domaine" placeholder="{{ __('Domaine') }}" autofocus>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputExperience" class="col-sm-2 col-form-label">Téléphone</label>
                        <div class="col-sm-10">
                          <input type="number" class="form-control @error('telephone') is-invalid @enderror" name="telephone" 
                                value="@if (Auth::guard('admin')){{ auth('admin')->user()->telephone }}@else{{ auth('organisation')->user()->telephone }}@endif" 
                                required autocomplete="telephone" placeholder="{{ __('Téléphone') }}" autofocus>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                          <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" 
                                value="@if (Auth::guard('admin')){{ auth('admin')->user()->email }}@else{{ auth('organisation')->user()->email }}@endif" 
                                required autocomplete="email" placeholder="{{ __('Addresse E-Mail ') }}">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputSkills" class="col-sm-2 col-form-label">Mot de passe</label>
                        <div class="col-sm-10">
                          <input type="password" class="form-control @error('password') is-invalid @enderror" 
                                    name="password" required autocomplete="new-password" placeholder="{{ __('Mot de passe') }}">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputSkills" class="col-sm-2 col-form-label">Confirmation</label>
                        <div class="col-sm-10">
                          <input type="password" class="form-control" name="password_confirmation" required 
                                  autocomplete="new-password" placeholder="{{ __('Confirmation Mot de passe') }}">
                        </div>
                      </div>
                      <div class="form-group row">
                        <div class="offset-sm-2 col-sm-10">
                          <button type="submit" class="btn btn-primary">Valider</button>
                        </div>
                      </div>
                    </form>
                  </div>
                  <!-- /.tab-pane -->
                </div>
                <!-- /.tab-content -->
              </div><!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->

@endsection