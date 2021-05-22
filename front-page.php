<?php get_header(); ?>

<!-- Video Modal Start -->
<div class="modal fade" id="home-hero-video-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg modal-dialog-centered">
		<div class="modal-content">
			<div class="modal-body mb-0 p-0">
				<iframe width="100%" height="315" class="embed-responsive-item d-block" src="https://www.youtube.com/embed/A3PDXmYoF5U" frameborder="0" allowfullscreen></iframe>
			</div>
		</div>
	</div>
</div>
<!-- Video Modal End -->


<!-- Home Hero Section Start -->
<section class="home-hero-section" style="background-image: url(<?php echo get_template_directory_uri() . '/assets/images/home-hero-bg.png' ?>);">

	<div class="overlay"></div>

	<div class="container">
		<div class="row align-items-center">

			<div class="col-md-6">
				<div class="home-hero-heading">
					<p class="home-hero-sub-title">Duurzame huisjes</p>
					<h1 class="home-hero-title">Een ecologisch tiny huisje is zoveel mogelijk opgebouwd uit duurzame natuurlijke materialen</h1>
				</div>
			</div>

			<div class="col-md-6">
				<div class="home-hero-video">
					<a data-bs-toggle="modal" href="#home-hero-video-modal"><i class="bi-play-circle-fill"></i> Bekijk de film</a>
				</div>
			</div>

		</div>
	</div>

	<div class="home-hero-social">
		<ul>
			<li><a href="#">Instagram</a></li>
			<li><a href="#">Facebook</a></li>
			<li><a href="#">Linkedin</a></li>
		</ul>
	</div>

</section>
<!-- Home Hero Section End -->


<!-- Home About Section Start -->
<section class="home-about-section">
	
	<div class="home-about-top">
		<div class="container">
			<div class="row align-items-start">

				<div class="col-lg-8 col-md-6">
					<div class="home-about-text">
						<h2 class="home-about-heading">Duurzame materialen</h2>
						<p>Alle EcoCabins hebben een hoge isolatiewaarde, worden geproduceerd met indien mogelijk duurzame en/of natuurlijke materialen en hebben als opvallende uiterlijke kenmerk de ‘ronde hoeken’, mogelijk gemaakt door het specifieke materiaalgebruik. De voordelen van bouwen met hout zijn legio: hout is licht, flexibel, isoleert goed en bouwt snel en efficiënt.</p>
						<a href="#" class="btn btn-outline-dark">Button</a>
					</div>
				</div>

				<div class="col-lg-4 col-md-6">
					<div class="home-about-slider">
						<div id="home-about-slider" class="carousel slide" data-bs-ride="carousel">

							<div class="carousel-indicators">
								<button type="button" data-bs-target="#home-about-slider" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
								<button type="button" data-bs-target="#home-about-slider" data-bs-slide-to="1" aria-label="Slide 2"></button>
								<button type="button" data-bs-target="#home-about-slider" data-bs-slide-to="2" aria-label="Slide 3"></button>
							</div>

							<div class="carousel-inner">
								<div class="carousel-item active">
									<img src="<?php echo get_template_directory_uri() . '/assets/images/about.jpg' ?>" class="d-block w-100" alt="About Slide">
								</div>
								
								<div class="carousel-item">
									<img src="<?php echo get_template_directory_uri() . '/assets/images/about.jpg' ?>" class="d-block w-100" alt="About Slide">
								</div>
								
								<div class="carousel-item">
									<img src="<?php echo get_template_directory_uri() . '/assets/images/about.jpg' ?>" class="d-block w-100" alt="About Slide">
								</div>
							</div>

						</div>
					</div>
				</div>

			</div>
		</div>
	</div>

	<div class="home-about-bottom">
		<div class="container">
			<div class="row">

				<div class="col-md-12">
					<h2 class="home-about-heading">Innovatie</h2>
				</div>

				<div class="col-md-6">
					<div class="home-about-text">
						<p>Wij hebben als doel om de EcoCabins voortdurend verder te ontwikkelen en innoveren, zodat de EcoCabins uiteindelijk 100% duurzaam en circulair zijn. Voorwaarde hierbij is dat de EcoCabins betaalbaar blijven. Met behulp van de zon, de wind en de beste isolatie geniet u van.</p>
					</div>
				</div>

				<div class="col-md-6">
					<div class="home-about-text">
						<p>Alle EcoCabins hebben een hoge isolatiewaarde, worden geproduceerd met indien mogelijk duurzame en/of natuurlijke materialen en hebben als opvallende uiterlijke kenmerk de ‘ronde hoeken’, mogelijk gemaakt door het specifieke materiaalgebruik De voordelen van bouwen.</p>
					</div>
				</div>

			</div>
		</div>
	</div>

</section>
<!-- Home About Section End -->


<!-- Home Feature Section Start -->
<div class="home-feature-section">
	<div class="container">
		<div class="row">

			<div class="col-md-6">
				<div class="home-feature-img">
					<img src="<?php echo get_template_directory_uri() . '/assets/images/feature.png' ?>" class="d-block" alt="Feature Image">
				</div>
			</div>

			<div class="col-md-6">
				<div class="home-feature-content">
					
					<div class="row">

						<div class="col-md-6 col-sm-6">
							<div class="home-feature-content-box">
								<h3 class="feature-content-box-title">Hout</h3>
								<p>De draagconstructies van EcoCabins bestaan uit hout. Hout is duurzaam en.</p>
							</div>
						</div>

						<div class="col-md-6 col-sm-6">
							<div class="home-feature-content-box">
								<h3 class="feature-content-box-title">Glaswol isolatie</h3>
								<p>De combinatie van glaswol met een houtskelet constructie geeft een.</p>
							</div>
						</div>

						<div class="col-md-6 col-sm-6">
							<div class="home-feature-content-box">
								<h3 class="feature-content-box-title">Afwerking</h3>
								<p>De draagconstructies van EcoCabins bestaan uit hout. Hout is duurzaam en.</p>
							</div>
						</div>

						<div class="col-md-6 col-sm-6">
							<div class="home-feature-content-box">
								<h3 class="feature-content-box-title">Triple glas</h3>
								<p>De combinatie van glaswol met een houtskelet constructie geeft een.</p>
							</div>
						</div>

						<div class="col-md-6 col-sm-6">
							<div class="home-feature-content-box">
								<h3 class="feature-content-box-title">Stalen onderstel</h3>
								<p>Het stalen onderstel is sterk zijn en heeft de benodigde stijfheid die</p>
							</div>
						</div>

						<div class="col-md-6 col-sm-6">
							<div class="home-feature-content-box">
								<h3 class="feature-content-box-title">Infrarood vloer</h3>
								<p>De vloer wordt opgewarmd middels opgewekte warmte uit eigen zonne-energie.</p>
							</div>
						</div>


					</div>

				</div>
			</div>

		</div>
	</div>
</div>
<!-- Home Feature Section End -->

<?php get_footer(); ?>