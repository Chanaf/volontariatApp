<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>@yield('title')</title>
	
    <!-- css -->
    <link href="{{url('/')}}/user/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="{{url('/')}}/user/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" type="text/css" href="{{url('/')}}/user/plugins/cubeportfolio/css/cubeportfolio.min.css">
	<link href="{{url('/')}}/user/css/nivo-lightbox.css" rel="stylesheet" />
	<link href="{{url('/')}}/user/css/nivo-lightbox-theme/default/default.css" rel="stylesheet" type="text/css" />
	<link href="{{url('/')}}/user/css/owl.carousel.css" rel="stylesheet" media="screen" />
    <link href="{{url('/')}}/user/css/owl.theme.css" rel="stylesheet" media="screen" />
	<link href="{{url('/')}}/user/css/animate.css" rel="stylesheet" />
    <link href="{{url('/')}}/user/css/style.css" rel="stylesheet">

	<!-- boxed bg -->
	<link id="bodybg" href="{{url('/')}}/user/bodybg/bg1.css" rel="stylesheet" type="text/css" />
	<!-- template skin -->
	<link id="t-colors" href="{{url('/')}}/user/color/green.css" rel="stylesheet">


</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-custom">

<div id="wrapper">
	
    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
		<div class="top-area">
			<div class="container">
				<div class="row">
					<div class="col-sm-6 col-md-6">
					 	<p class="bold text-left">
							<span class="fa-stack fa-md">
								<i class="fa fa-phone fa-stack-1x fa-inverse"></i>
							</span> +227 97 503 545 
							<span class="fa-stack fa-md">
								<i class="fa fa-envelope-o fa-stack-1x fa-inverse"></i>
							</span> volontaire@gmail.com
						</p> 
					</div>
					<div class="col-sm-6 col-md-6">
						<p class="text-right" >
						@auth('user')
							<a href="{{ route('mon-compte') }}" type="button" class="btn ">Mon compte</a>
						@endauth
						@guest('user')
							<a href="{{ route('login') }}" type="button" class="btn ">Se connecter</a>
						@endguest
						</p>
					</div>
				</div>
			</div>
		</div>
        <div class="container navigation">
		
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="{{ route('accueil') }}">
                    <img src="{{url('/')}}/user/img/logo.png" alt="" width="150" height="40" />
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
			  <ul class="nav navbar-nav">
				<li class="active"><a href="{{ route('accueil') }}">Accueil</a></li>
				<li><a href="#service">A propos</a></li>
				<li><a href="#doctor">Activités</a></li>
				<li><a href="#facilities">Organisations</a></li>
				<li><a href="#pricing">Contactez-nous</a></li>
				<li class="dropdown">
				  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Inscription <b class="caret"></b></a>
				  <ul class="dropdown-menu">
					<li><a href="{{ route('organisations.create') }}">Organisation</a></li>
					<li><a href="{{ route('register') }}">Volontaire</a></li>
				  </ul>
				</li>
			  </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
	

    @yield('content')
	

	<footer>
	
		<div class="container" id="pricing">
			<div class="row">
				<div class="col-sm-6 col-md-4">
					<div class="wow fadeInDown" data-wow-delay="0.1s">
					<div class="widget">
						<h5>A propos de la plate-forme</h5>
						<p>
						Permettre aux organisations de publier leurs activités 
						et permettre aux volontaires de s’inscrire pour participer aux activités.
						</p>
					</div>
					</div>
					<!-- <div class="wow fadeInDown" data-wow-delay="0.1s">
						<div class="widget">
							<h5>Information</h5>
							<ul>
								<li><a href="#">Home</a></li>
								<li><a href="#">Laboratory</a></li>
								<li><a href="#">Medical treatment</a></li>
								<li><a href="#">Terms & conditions</a></li>
							</ul>
						</div>
					</div> -->
				</div>
				<div class="col-sm-6 col-md-4">
					<div class="wow fadeInDown" data-wow-delay="0.1s">
					<div class="widget">
						<h5>Contacts</h5>
						<ul>
							<li>
								<span class="fa-stack fa-lg">
									<i class="fa fa-circle fa-stack-2x"></i>
									<i class="fa fa-phone fa-stack-1x fa-inverse"></i>
								</span> +227 97 503 545
							</li>
							<li>
								<span class="fa-stack fa-lg">
									<i class="fa fa-circle fa-stack-2x"></i>
									<i class="fa fa-envelope-o fa-stack-1x fa-inverse"></i>
								</span> volontaire@gmail.com
							</li>

						</ul>
					</div>
					</div>
				</div>
				<div class="col-sm-6 col-md-4">
					<div class="wow fadeInDown" data-wow-delay="0.1s">
						<div class="widget">
							<h5>Suivez-nous</h5>
							<ul class="company-social">
								<li class="social-facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li class="social-twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
								<!-- <li class="social-whatsapp"><a href="#"><i class="fa fa-whatsapp"></i></a></li> -->
								<li class="social-vimeo"><a href="#"><i class="fa fa-linkedin"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>	
		</div>
		<div class="sub-footer">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-md-6 col-lg-6">
					<div class="wow fadeInLeft" data-wow-delay="0.1s">
					<div class="text-left">
					<p>&copy;Copyright 2021 - Volontariat.</p>
					</div>
					</div>
				</div>
				<div class="col-sm-6 col-md-6 col-lg-6">
					<div class="wow fadeInRight" data-wow-delay="0.1s">
					<div class="text-right">
						<!-- <p><a href="http://bootstraptaste.com/">Bootstrap Themes</a> by BootstrapTaste</p> -->
					</div>
                    <!-- 
                        All links in the footer should remain intact. 
                        Licenseing information is available at: http://bootstraptaste.com/license/
                        You can buy this theme without footer links online at: http://bootstraptaste.com/buy/?theme=Medicio
                    -->
					</div>
				</div>
			</div>	
		</div>
		</div>
	</footer>

</div>
<a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>

	<!-- Core JavaScript Files -->
    <script src="{{url('/')}}/user/js/jquery.min.js"></script>	 
    <script src="{{url('/')}}/user/js/bootstrap.min.js"></script>
    <script src="{{url('/')}}/user/js/jquery.easing.min.js"></script>
	<script src="{{url('/')}}/user/js/wow.min.js"></script>
	<script src="{{url('/')}}/user/js/jquery.scrollTo.js"></script>
	<script src="{{url('/')}}/user/js/jquery.appear.js"></script>
	<script src="{{url('/')}}/user/js/stellar.js"></script>
	<script src="{{url('/')}}/user/plugins/cubeportfolio/js/jquery.cubeportfolio.min.js"></script>
	<script src="{{url('/')}}/user/js/owl.carousel.min.js"></script>
	<script src="{{url('/')}}/user/js/nivo-lightbox.min.js"></script>
    <script src="{{url('/')}}/user/js/custom.js"></script>


</body>

</html>