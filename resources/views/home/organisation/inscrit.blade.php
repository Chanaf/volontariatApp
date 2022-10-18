@extends('layouts.admin')

@section('title', 'Home')

@section('content')

<div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Liste des organisations</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">
                	<div class="row">
                		<div class="col-sm-12 col-md-6">
                			<div class="dt-buttons btn-group flex-wrap">               
                				<button class="btn btn-secondary buttons-excel buttons-html5" tabindex="0" aria-controls="example1" type="button">
                					<span>Excel</span>
                				</button> 
                				<button class="btn btn-secondary buttons-pdf buttons-html5" tabindex="0" aria-controls="example1" type="button">
                					<span>PDF</span>
                				</button> 
                				<button class="btn btn-secondary buttons-print" tabindex="0" aria-controls="example1" type="button">
                					<span>Imprimer</span>
                				</button> 
                			</div> 
                		</div>
                	
                    <div class="col-sm-12 col-md-6">
                      <div id="example1_filter" class="dataTables_filter">
                        <label>
                          Recherche:
                          <input type="search" class="form-control form-control-sm" placeholder="" aria-controls="example1">
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
                              Nom Orga.
                            </th>
                            <th tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">
                              Domaine d'act.
                            </th>
                            <th tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">
                              Adresse
                            </th>
                            <th tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">
                              Statut
                            </th>
                            <th tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">
                              Action
                            </th>
                          </tr>
                        </thead>
                        <tbody>
                        @foreach($organisations as $organisation)
                          <tr class="even">
                            <td class="dtr-control sorting_1" tabindex="0">{{$organisation->created_at}}</td>
                            <td>{{$organisation->name}}</td>
                            <td>{{$organisation->domaine}}</td>
                            <td>{{$organisation->telephone}}</td>
                            <td>{{$organisation->adresse}}</td>
                            <td class="project-actions text-right">
                            <a class="btn btn-primary btn-sm" 
                                  data-toggle="modal" data-target="#modal-lg{{$organisation->id}}"
                                  href="{{route('organisations.show', $organisation->id)}} ">
                                  <i class="fas fa-eye"></i>
                                  Détails
                              </a>
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
                <ul class="pagination"><li class="paginate_button page-item previous disabled" id="example1_previous"><a href="#" aria-controls="example1" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li><li class="paginate_button page-item active"><a href="#" aria-controls="example1" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item "><a href="#" aria-controls="example1" data-dt-idx="2" tabindex="0" class="page-link">2</a></li><li class="paginate_button page-item "><a href="#" aria-controls="example1" data-dt-idx="3" tabindex="0" class="page-link">3</a></li><li class="paginate_button page-item "><a href="#" aria-controls="example1" data-dt-idx="4" tabindex="0" class="page-link">4</a></li><li class="paginate_button page-item "><a href="#" aria-controls="example1" data-dt-idx="5" tabindex="0" class="page-link">5</a></li><li class="paginate_button page-item "><a href="#" aria-controls="example1" data-dt-idx="6" tabindex="0" class="page-link">6</a></li><li class="paginate_button page-item next" id="example1_next"><a href="#" aria-controls="example1" data-dt-idx="7" tabindex="0" class="page-link">Next</a></li></ul></div></div></div> -->
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

    @foreach($organisations as $organisation)
      <div class="modal fade" id="modal-lg{{$organisation->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Détails de l'organisation</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <h5><span class="text-primary">Nom :</span> <span style="font-size:15px;" class="text-justify ml-3">{{ $organisation->name }}</span></h5>
              <h5><span class="text-primary">Domaine d'activité :</span> <span style="font-size:15px;" class="text-justify ml-3">{{ $organisation->domaine }}</span></h5>
              <h5><span class="text-primary">Téléphone :</span> <span style="font-size:15px;" class="text-justify ml-3">{{ $organisation->telephone }} </span></h5>
              <h5><span class="text-primary">Email :</span> <span style="font-size:15px;" class="text-justify ml-3">{{ $organisation->email }} </span></h5>
              <h5><span class="text-primary">Adresse :</span> <span style="font-size:15px;" class="text-justify ml-3">{{ $organisation->adresse }}</span></h5>
              <span class="float-right">Créer le : {{ $organisation->created_at }} </span>
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

@endsection
