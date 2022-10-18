@extends('layouts.admin')

@section('title', 'Home')

@section('content')

<div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Liste des activités de l'organisation</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">
                	<div class="row">
                  <div class="col-sm-12 col-md-6">
                			<div class="dt-buttons btn-group flex-wrap">               
                				<button class="btn btn-primary buttons-html5" tabindex="0" aria-controls="example1" type="button" data-toggle="modal" data-target="#ajout">
                					<span>Ajouter une activitée</span>
                				</button> 
                			</div> 
                		</div>
                    <div class="col-sm-12 col-md-6">
                      <div id="example1_filter" class="dataTables_filter">
                        <label>
                          Recherche :
                          <input type="search" class="form-control form-control-sm" placeholder="Rechercher" aria-controls="example1">
                        </label>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-12">
                      <table id="example1" class="table table-bordered table-striped dataTable dtr-inline" aria-describedby="example1_info">
                          <thead>
                          <tr>              	
                            <th tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">
                              Date
                            </th>
                            <th tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">
                              Libellé
                            </th>
                            <th tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">
                              Date début
                            </th>
                            <th tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">
                              Date fin
                            </th>
                            <th tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">
                              Date cloture
                            </th>
                            <th tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">
                              Organisée par
                            </th>
                            <th tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">
                              Action
                            </th>
                          </tr>
                        </thead>
                        <tbody>
                        @foreach($activites as $activite)
                          <tr class="even">
                            <td class="dtr-control sorting_1" tabindex="0">{{$activite->created_at}}</td>
                            <td>{{$activite->libelle}}</td>
                            <td>{{$activite->date_debut}}</td>
                            <td>{{$activite->date_fin}}</td>
                            <td>{{$activite->date_cloture}}</td>
                            <td>{{$organisation->name}}</td>
                            <td class="project-actions text-right">
                            <form action="{{route('activites.destroy', $activite->id)}} " method="post">
                              <a class="btn btn-primary btn-sm" 
                                  data-toggle="modal" data-target="#modal-lg{{$activite->id}}"
                                  href="{{route('activites.show', $activite->id)}} ">
                                  <i class="fas fa-eye"></i>
                              </a>
                              <a class="btn btn-info btn-sm" href="{{route('valider', $activite->id)}} ">
                                  <i class="fas fa-pencil-alt"></i>
                              </a>
                              <a class="btn btn-danger btn-sm" href="{{route('rejeter', $activite->id)}}">
                                  <i class="fas fa-trash"></i>
                              </a>
                            </form>
                            </td>
                          </tr>
                          @endforeach
                        </tbody>
                      </table>
                    </div>
                  </div>
          </div>
          <!-- <div class="row">
            <div class="col-sm-12 col-md-7">
              <div class="dataTables_paginate paging_simple_numbers" id="example1_paginate">
                <ul class="pagination">
                  <li class="paginate_button page-item previous disabled" id="example1_previous">
                    <a href="#" aria-controls="example1" data-dt-idx="0" tabindex="0" class="page-link">
                      Previous
                    </a>
                  </li>
                  <li class="paginate_button page-item active">
                    <a href="#" aria-controls="example1" data-dt-idx="1" tabindex="0" class="page-link">1</a>
                  </li>
                  <li class="paginate_button page-item ">
                    <a href="#" aria-controls="example1" data-dt-idx="2" tabindex="0" class="page-link">2</a>
                  </li>
                  <li class="paginate_button page-item ">
                    <a href="#" aria-controls="example1" data-dt-idx="3" tabindex="0" class="page-link">3</a>
                  </li>
                  <li class="paginate_button page-item ">
                    <a href="#" aria-controls="example1" data-dt-idx="4" tabindex="0" class="page-link">4</a>
                  </li>
                  <li class="paginate_button page-item ">
                    <a href="#" aria-controls="example1" data-dt-idx="5" tabindex="0" class="page-link">5</a>
                  </li>
                  <li class="paginate_button page-item ">
                    <a href="#" aria-controls="example1" data-dt-idx="6" tabindex="0" class="page-link">6</a>
                  </li>
                  <li class="paginate_button page-item next" id="example1_next">
                    <a href="#" aria-controls="example1" data-dt-idx="7" tabindex="0" class="page-link">Next</a>
                  </li>
                </ul>
                </div>
                </div>
                </div> -->
                </div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->

      @foreach($activites as $activite)
      <div class="modal fade" id="modal-lg{{$activite->id}}">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Détails de l'activite</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <h5><span class="text-primary">Libellé :</span> <span style="font-size:15px;" class="text-justify ml-3">{{ $activite->libelle }}</span></h5>
              <h5><span class="text-primary">Lieu :</span> <span style="font-size:15px;" class="text-justify ml-3">{{ $activite->lieu }}</span></h5>
              <h5><span class="text-primary">Description :</span> <span style="font-size:15px;" class="text-justify ml-3">{{ $activite->description }}</span></h5>
              <h5><span class="text-primary">Date début :</span> <span style="font-size:15px;" class="text-justify ml-3">{{ $activite->date_debut }}</span></h5>
              <h5><span class="text-primary">Date fin :</span> <span style="font-size:15px;" class="text-justify ml-3">{{ $activite->date_fin }} </span></h5>
              <h5><span class="text-primary">Date cloture :</span> <span style="font-size:15px;" class="text-justify ml-3">{{ $activite->date_cloture }} </span></h5>
              <h5><span class="text-primary">Nombre Volontaire :</span> <span style="font-size:15px;" class="text-justify ml-3">{{ $activite->nbre_volontaire }}</span></h5>
              <h5><span class="text-primary">Organisée par :</span> <span style="font-size:15px;" class="text-justify ml-3">{{ $organisation->name }}</span></h5>
              <span class="float-right">Créer le : {{ $activite->created_at }} </span>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->
      @endforeach


      <div class="modal fade" id="ajout">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Ajouter une activité</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
          <form method="post" action="{{ route('activites.store') }}">
          @csrf
            <div class="modal-body">
              <div class="form-group">
                <label for="libelle">Libellé </label>
                <input type="text" class="form-control form-control-border" id="libelle" placeholder="Saisir le libellé">
              </div>
              
              <div class="form-group">
                <label for="libelle">Lieu </label>
                <input type="text" class="form-control form-control-border" id="libelle" placeholder="Saisir le lieu">
              </div>
              
              <div class="form-group">
                <label for="libelle">Description </label>
                <input type="text" class="form-control form-control-border" id="libelle" placeholder="Saisir la description">
              </div>
              <div class="form-group">
                <label for="nombre">Nombre de volontaire </label>
                <input type="number" class="form-control form-control-border" id="nombre" placeholder="Saisir le nombre de volontaire">
              </div>
              <div class="form-group">
                  <label>Date Début</label>
                  <div class="input-group">
                    <input type="datetime-local" class="form-control form-control-border">
                  </div>
                  <!-- /.input group -->
                </div>
                <div class="form-group">
                  <label>Date Fin</label>
                  <div class="input-group">
                    <input type="datetime-local" class="form-control form-control-border">
                  </div>
                  <!-- /.input group -->
                </div>
                <div class="form-group">
                  <label>Date Cloture</label>
                  <div class="input-group">
                    <input type="datetime-local" class="form-control form-control-border">
                  </div>
                  <!-- /.input group -->
                </div>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="submit" class="btn btn-primary">Valider</button>
              <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
            </div>
          </form>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->

@endsection
