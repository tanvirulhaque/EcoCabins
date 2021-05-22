<?php get_header(); ?>


<div class="modal fade" id="home-hero-video-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg modal-dialog-centered">

    <div class="modal-content">

      <div class="modal-body mb-0 p-0">
            <iframe width="100%" height="315" style="display: block;" class="embed-responsive-item" src="https://www.youtube.com/embed/A3PDXmYoF5U" frameborder="0" allowfullscreen></iframe>
      </div>
      

    </div>
  </div>
</div>

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

<?php get_footer(); ?>