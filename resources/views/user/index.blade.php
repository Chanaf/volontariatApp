@extends('layouts.user')

@section('title', 'Home')

@section('content')

    <!-- Section: intro -->
    <section id="intro" class="intro">
		<div class="intro-content">
			<div class="container">
				<div class="row">
					<div class="col-lg-6">
					<div class="wow fadeInDown" data-wow-offset="0" data-wow-delay="0.1s">
					<h2 class="h-ultra">Plate-forme du volontariat</h2>
					</div>
					<div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.1s">
					<h4 class="h-light">Avançons <span class="color">ensemble</span></h4>
					</div>
						<div class="well well-trans">
						<div class="wow fadeInRight" data-wow-delay="0.1s">

						<ul class="lead-list">
							<li>
                <span class="fa fa-check fa-2x icon-success"></span> 
                <span class="list">
                  <strong>Avoir un esprit de culture du volontariat</strong>
                  <br />
                </span>
              </li>
							<li>
                <span class="fa fa-check fa-2x icon-success"></span> 
                <span class="list">
                  <strong>Avoir un esprit de sacrifice</strong>
                  <br />
                </span>
              </li>
							<li>
                <span class="fa fa-check fa-2x icon-success"></span> 
                <span class="list">
                  <strong>Etre discret, dynamique et disponible</strong>
                  <br />
                </span>
              </li>
							<li>
                <span class="fa fa-check fa-2x icon-success"></span> 
                <span class="list">
                  <strong>Apte à travailler dans un environnement multiculturel</strong>
                  <br />
                </span>
              </li>
						</ul>

						</div>
						</div>


					</div>
					<!-- 		Place du formulaire appoinment			 -->
				</div>		
			</div>
		</div>		
    </section>
	
	<!-- /Section: intro -->

	<!-- Section: boxes -->
    <section id="boxes" class="home-section paddingtop-80">
	
      <div class="container">
        <div class="row">
          <div class="col-sm-3 col-md-3">
            <div class="wow fadeInUp" data-wow-delay="0.2s">
              <div class="box text-center">
                
                <i class="fa fa-check fa-3x circled bg-skin"></i>
                <h4 class="h-bold">Devenir volontaire</h4>
                <p>
                  Créer votre profil dans la banque de candidats pour pouvoir y postuler.
                </p>
              </div>
            </div>
          </div>
          <div class="col-sm-3 col-md-3">
            <div class="wow fadeInUp" data-wow-delay="0.2s">
              <div class="box text-center">
                
                <i class="fa fa-clock-o fa-3x circled bg-skin"></i>
                <h4 class="h-bold">Donner de son temps</h4>
                <p>
                  Pour défendre une cause, pour aider des personnes.
                </p>
              </div>
            </div>
          </div>
          <div class="col-sm-3 col-md-3">
            <div class="wow fadeInUp" data-wow-delay="0.2s">
              <div class="box text-center">
                <i class="fa fa-users fa-3x circled bg-skin"></i>
                <h4 class="h-bold">Assister au besoin</h4>
                <p>
                  Apporter son aide dès que le besoin se fait ressentir.
                </p>
              </div>
            </div>
          </div>
          <div class="col-sm-3 col-md-3">
            <div class="wow fadeInUp" data-wow-delay="0.2s">
              <div class="box text-center">
                <i class="fa fa-smile-o fa-3x circled bg-skin"></i>
                <h4 class="h-bold">Rendre service</h4>
                <p>
                  Rendre service aux autres c'est se rendre service à soi-même.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>

    </section>
	<!-- /Section: boxes -->
	
	
	<section id="service" class="home-section paddingtop-40">	
           <div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="callaction bg-gray">
							<div class="row">
								<div class="col-md-8">
									<div class="wow fadeInUp" data-wow-delay="0.1s">
									<div class="cta-text">
									<h3>Avantages du volontariat</h3>
									<p>
                    Le volontariat contribue à l'amélioration de la qualité de vie et la santé des collectivités.
                    Le volontariat comprend de nombreux avantages : flexibilité, rencontres, nouveaux amis, mentors etc.
                    Il permet de prendre part à un changement positif, de travailler à améliorer les choses. 
                    Etre volontaire, c'est aussi se former, se spécialiser autour d'un sujet qui peut permettre d'atteindre un niveau d'expertise.
                  </p>
									</div>
									</div>
								</div>
								<div class="col-md-4">
									<div class="wow lightSpeedIn" data-wow-delay="0.1s">
										<div class="cta-btn">
										<a href="{{ route('register') }}" class="btn btn-skin btn-lg">Devenir volontaire</a>	
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
            </div>
	</section>	
	

	<!-- Section: services -->
    <section id="service" class="home-section nopadding paddingtop-60">

		<div class="container">

        <div class="row">
			<div class="col-sm-6 col-md-6">
				<div class="wow fadeInUp" data-wow-delay="0.2s">
				<img src="{{url('/')}}/user/img/dummy/img-1.jpg" class="img-responsive" alt="" />
				</div>
            </div>
			<div class="col-sm-3 col-md-3">
				
				<div class="wow fadeInRight" data-wow-delay="0.1s">
                <div class="service-box">
					<div class="service-icon">
						<span class="fa fa-stethoscope fa-3x"></span> 
					</div>
					<div class="service-desc">
						<h5 class="h-light">Santé</h5>
						<p>Vestibulum tincidunt enim in pharetra malesuada.</p>
					</div>
                </div>
				</div>
				
				<div class="wow fadeInRight" data-wow-delay="0.2s">
				<div class="service-box">
					<div class="service-icon">
						<span class="fa fa-university fa-3x"></span> 
					</div>
					<div class="service-desc">
						<h5 class="h-light">Education</h5>
						<p>Vestibulum tincidunt enim in pharetra malesuada.</p>
					</div>
                </div>
				</div>
				<div class="wow fadeInRight" data-wow-delay="0.3s">
				<div class="service-box">
					<div class="service-icon">
						<span class="fa fa-leaf fa-3x"></span> 
					</div>
					<div class="service-desc">
						<h5 class="h-light">Environnement</h5>
						<p>Vestibulum tincidunt enim in pharetra malesuada.</p>
					</div>
                </div>
				</div>


            </div>
			<div class="col-sm-3 col-md-3">
				
				<div class="wow fadeInRight" data-wow-delay="0.1s">
                <div class="service-box">
					<div class="service-icon">
						<span class="fa fa-futbol-o fa-3x"></span> 
					</div>
					<div class="service-desc">
						<h5 class="h-light">Sport</h5>
						<p>Vestibulum tincidunt enim in pharetra malesuada.</p>
					</div>
                </div>
				</div>
				
				<div class="wow fadeInRight" data-wow-delay="0.2s">
				<div class="service-box">
					<div class="service-icon">
						<span class="fa fa-users fa-3x"></span> 
					</div>
					<div class="service-desc">
						<h5 class="h-light">Social</h5>
						<p>Vestibulum tincidunt enim in pharetra malesuada.</p>
					</div>
                </div>
				</div>
				<div class="wow fadeInRight" data-wow-delay="0.3s">
				<div class="service-box">
					<div class="service-icon">
						<span class="fa fa-user-md fa-3x"></span> 
					</div>
					<div class="service-desc">
						<h5 class="h-light">Culture</h5>
						<p>Vestibulum tincidunt enim in pharetra malesuada.</p>
					</div>
                </div>
				</div>

            </div>
			
        </div>		
		</div>
	</section>
	<!-- /Section: services -->
	

	<!-- Section: team -->
    <section id="doctor" class="home-section bg-gray paddingbot-60">
		<div class="container marginbot-50">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
					<div class="wow fadeInDown" data-wow-delay="0.1s">
					<div class="section-heading text-center">
					<h2 class="h-bold">Activités</h2>
					<p>Devenir volontaire dans l'une des activités</p>
					</div>
					</div>
					<div class="divider-short"></div>
				</div>
			</div>
		</div>
		
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
				
            <div id="filters-container" class="cbp-l-filters-alignLeft">
                <div data-filter="*" class="cbp-filter-item-active cbp-filter-item">Toutes (<div class="cbp-filter-counter"></div>)</div>
                <div data-filter=".cardiologist" class="cbp-filter-item">Sanitaire (<div class="cbp-filter-counter"></div>)</div>
                <div data-filter=".psychiatrist" class="cbp-filter-item">Sociale (<div class="cbp-filter-counter"></div>)</div>
                <div data-filter=".neurologist" class="cbp-filter-item">Education (<div class="cbp-filter-counter"></div>)</div>
                <div data-filter=".environnement" class="cbp-filter-item">Environnement (<div class="cbp-filter-counter"></div>)</div>
            </div>
		
            <div id="grid-container" class="cbp-l-grid-team">
                <ul>
				@foreach($activites as $activite)
                    <li class="cbp-item psychiatrist">
                        <a class="cbp-caption cbp-singlePage">
                            <div class="cbp-caption-defaultWrap">
                                <img src="{{url('/')}}/user/img/team/1.jpg" alt="" width="100%">
                            </div>
                            <div class="cbp-caption-activeWrap">
                                <div class="cbp-l-caption-alignCenter">
                                    <div class="cbp-l-caption-body">
										<div class="cbp-singlePage cbp-l-grid-team-name">{{$organisation->name}}</div>
                                        <div class="cbp-l-caption-text">{{ $activite->libelle }}</div></br>
										@auth('user')
										<button class="btn btn-success" type="submit" aria-controls="example1" type="button" data-toggle="modal" data-target="#participer{{ $activite->id }}">Participer</button>
										@endauth

										@guest('user')
										<a class="btn btn-success" type="submit" aria-controls="example1" type="button" href ="{{ route('login') }}">Participer</a>
										@endguest
									</div>
                                </div>
                            </div>
                        </a>
                        <a class="cbp-singlePage cbp-l-grid-team-name"><strong>{{ $activite->nbre_volontaire }}</strong> Volontaires</a>
                        <div class="cbp-l-grid-team-position">Date : {{ $activite->date_debut }} 
						</div>
                    </li>
					@endforeach
                    <li class="cbp-item cardiologist">
                        <a href="{{url('/')}}/user/member1.html" class="cbp-caption cbp-singlePage">
                            <div class="cbp-caption-defaultWrap">
                                <img src="{{url('/')}}/user/img/team/2.jpg" alt="" width="100%">
                            </div>
                            <div class="cbp-caption-activeWrap">
                                <div class="cbp-l-caption-alignCenter">
                                    <div class="cbp-l-caption-body">
										<div class="cbp-singlePage cbp-l-grid-team-name">Association VMV</div>
                                        <div class="cbp-l-caption-text">DETAILS</div>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="{{url('/')}}/user/member1.html" class="cbp-singlePage cbp-l-grid-team-name"><strong>5</strong> Volontaires</a>
                        <div class="cbp-l-grid-team-position">Date activité : 15/01/2021</div>
                    </li>
                    <li class="cbp-item cardiologist">
                        <a href="{{url('/')}}/user/member1.html" class="cbp-caption cbp-singlePage">
                            <div class="cbp-caption-defaultWrap">
                                <img src="{{url('/')}}/user/img/team/3.jpg" alt="" width="100%">
                            </div>
                            <div class="cbp-caption-activeWrap">
                                <div class="cbp-l-caption-alignCenter">
                                    <div class="cbp-l-caption-body">
										<div class="cbp-singlePage cbp-l-grid-team-name">Organisation 3D</div>
                                        <div class="cbp-l-caption-text">DETAILS</div>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="{{url('/')}}/user/member1.html" class="cbp-singlePage cbp-l-grid-team-name"><strong>3</strong> Volontaires</a>
                        <div class="cbp-l-grid-team-position">Date activité : 03/05/2021</div>
                    </li>
                    <li class="cbp-item environnement">
                        <a href="{{url('/')}}/user/member1.html" class="cbp-caption cbp-singlePage">
                            <div class="cbp-caption-defaultWrap">
                                <img src="{{url('/')}}/user/img/team/4.jpg" alt="" width="100%">
                            </div>
                            <div class="cbp-caption-activeWrap">
                                <div class="cbp-l-caption-alignCenter">
                                    <div class="cbp-l-caption-body">
										<div class="cbp-singlePage cbp-l-grid-team-name">Association TARE</div>
                                        <div class="cbp-l-caption-text">DETAILS</div>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="{{url('/')}}/user/member1.html" class="cbp-singlePage cbp-l-grid-team-name"><strong>18</strong> Volontaires</a>
                        <div class="cbp-l-grid-team-position">Date activité : 13/02/2021</div>
                    </li>
                </ul>
            </div>
		</div>
	</section>
	<!-- /Section: team -->

	
		
	<!-- Section: works -->
    <section id="facilities" class="home-section paddingbot-60">
		<div class="container marginbot-50">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
					<div class="wow fadeInDown" data-wow-delay="0.1s">
					<div class="section-heading text-center">
					<h2 class="h-bold">Associations / Organisations</h2>
					<p>Oeuvrons pour le bien-être de tous!</p>
					</div>
					</div>
					<div class="divider-short"></div>
				</div>
			</div>
		</div>

		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-md-12 col-lg-12" >
					<div class="wow bounceInUp" data-wow-delay="0.2s">
						<div id="owl-works" class="owl-carousel">
						@foreach($organisations as $organisation)
							<div class="item">
								<a href="{{url('/')}}/user/img/photo/1.jpg" title="{{$organisation->name}}" data-lightbox-gallery="gallery1" data-lightbox-hidpi="{{url('/')}}/user/img/works/1@2x.jpg">
									<img src="{{url('/')}}/user/img/photo/1.jpg" class="img-responsive img-circle" alt="img">
								</a>
							</div>
						@endforeach
							<div class="item"><a href="{{url('/')}}/user/img/photo/2.jpg" title="This is an image title" data-lightbox-gallery="gallery1" data-lightbox-hidpi="{{url('/')}}/user/img/works/2@2x.jpg"><img src="{{url('/')}}/user/img/photo/2.jpg" class="img-responsive img-circle" alt="img"></a></div>
							<div class="item"><a href="{{url('/')}}/user/img/photo/3.jpg" title="This is an image title" data-lightbox-gallery="gallery1" data-lightbox-hidpi="{{url('/')}}/user/img/works/3@2x.jpg"><img src="{{url('/')}}/user/img/photo/3.jpg" class="img-responsive img-circle" alt="img"></a></div>
							<div class="item"><a href="{{url('/')}}/user/img/photo/4.jpg" title="This is an image title" data-lightbox-gallery="gallery1" data-lightbox-hidpi="{{url('/')}}/user/img/works/4@2x.jpg"><img src="{{url('/')}}/user/img/photo/4.jpg" class="img-responsive img-circle" alt="img"></a></div>
							<div class="item"><a href="{{url('/')}}/user/img/photo/5.jpg" title="This is an image title" data-lightbox-gallery="gallery1" data-lightbox-hidpi="{{url('/')}}/user/img/works/5@2x.jpg"><img src="{{url('/')}}/user/img/photo/5.jpg" class="img-responsive img-circle" alt="img"></a></div>
							<div class="item"><a href="{{url('/')}}/user/img/photo/6.jpg" title="This is an image title" data-lightbox-gallery="gallery1" data-lightbox-hidpi="{{url('/')}}/user/img/works/6@2x.jpg"><img src="{{url('/')}}/user/img/photo/6.jpg" class="img-responsive img-circle" alt="img"></a></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- /Section: works -->
	
	<section id="pricing" class="home-section paddingbot-60">	
		<div class="container marginbot-50">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
					<div class="wow lightSpeedIn" data-wow-delay="0.1s">
					<div class="section-heading text-center">
					<h2 class="h-bold">Nos partenaires</h2>
					</div>
					</div>
					<div class="divider-short"></div>
				</div>
			</div>
		</div>
		
      <div class="container">
				<div class="row">
					<div class="col-sm-6 col-md-3">
						<div class="partner">
						<a href="#"><img src="{{url('/')}}/user/img/dummy/partner-1.jpg" alt="" /></a>
						</div>
					</div>
					<div class="col-sm-6 col-md-3">
						<div class="partner">
						<a href="#"><img src="{{url('/')}}/user/img/dummy/partner-2.jpg" alt="" /></a>
						</div>
					</div>
					<div class="col-sm-6 col-md-3">
						<div class="partner">
						<a href="#"><img src="{{url('/')}}/user/img/dummy/partner-3.jpg" alt="" /></a>
						</div>
					</div>
					<div class="col-sm-6 col-md-3">
						<div class="partner">
						<a href="#"><img src="{{url('/')}}/user/img/dummy/partner-4.jpg" alt="" /></a>
						</div>
					</div>
				</div>
            </div>
	</section>


	<div class="modal fade" id="participer{{ $activite->id }}">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Participer à une activité</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
          <form method="post" action="{{ route('activites.store') }}">
          @csrf
            <div class="modal-body">
              <div class="form-group">
                <label for="libelle">{{ $activite->libelle }}</label>
              </div>
              <div class="form-group">
                <label for="nombre">{{ $activite->description }} </label>
                <p></p>
              </div>
              <div class="form-group">
                  <label>Lieu de l'activité : {{ $activite->lieu }}</label>
            	</div>
            </div>
            <div class="modal-footer justify-content-between">
              <a href="{{route('participer', $activite->id)}}" type="submit" class="btn btn-primary">Participer</a>
              <button type="button" class="btn btn-danger" data-dismiss="modal">Annuler</button>
            </div>
          </form>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->

@endsection
