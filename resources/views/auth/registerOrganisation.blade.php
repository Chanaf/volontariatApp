@extends('layouts.app')

@section('content')

<div class="card">
    <div class="card-body register-card-body">
        <p class="login-box-msg">Inscrire votre<b> Organisation</b></p>

        <form method="POST" action="{{ route('organisations.store') }}" enctype="multipart/form-data">
            @csrf
                <div class="form-group mb-3">
                    <label for="insertNom">Nom</label>
                    <input type="text" name="insertNom" class="form-control" id="insertNom" placeholder="Nom de l'organisation" required>
                </div>
                <div class="form-group mb-3">
                    <label for="insertDomaine">Domaine d'activité</label>
                    <input type="text" name="insertDomaine" class="form-control" id="insertDomaine" placeholder="Domaine d'activité de l'organisation" required>
                </div>
                <div class="form-group mb-3">
                    <label for="insertTel">Téléphone</label>
                    <input type="text" name="insertTel" class="form-control" id="insertTel" placeholder="Numéro de téléphone" required>
                </div>
                <div class="form-group mb-3">
                    <label for="insertAdresse">Adresse de l'organisation</label>
                    <input type="text" name="insertAdresse" class="form-control" id="insertAdresse" placeholder="Adresse de l'organisation" required>
                </div>
                <div class="form-group mb-3">
                    <label for="insertLogo">Logo</label>
                    <input type="file" name="logo"  id="insertLogo" required class="course form-control">
                </div>
                <div class="form-group mb-3">
                    <label for="insertEmail">Email</label>
                    <input type="email" name="insertEmail" class="form-control" id="insertEmail" placeholder="Email de l'organisation" required>
                </div>
                <div class="form-group mb-3">
                    <label for="insertPassword">Mot de passe</label>
                    <input type="password" name="insertPassword" class="form-control" id="insertPassword" placeholder="Mot de passe" required>
                </div>
            <button class="btn btn-primary" type="submit">Valider</button>
            <a href="{{route('login')}}" class="btn btn-danger text-center">Annuler</a>
        </form>
        
    </div>
    <!-- /.form-box -->
</div><!-- /.card -->

@endsection
