<?php get_header(); ?>

<div class="homeWrapper container">

	<div class="row">

		<div class="d-none d-xl-block col-xl-8">
			<img src="<?php echo get_template_directory_uri(); ?>/images/logoHq.png" alt="Logo">
		</div>

		<div class="col-12 col-xl-4">
			<header class="headerHome">
				<div class=" d-flex d-xl-block">
					<div class="languageSelector order-1 ml-auto">ՀԱՅ</div>

					<nav class="order-2 navbar navbar-light bg-light d-block d-xl-none ">
						<button class="hidden-md-up navbar-togglerd-block  ml-auto " type="button" data-toggle="collapse" data-target="#menuHome" aria-expanded="false" aria-controls="menuHome">
						    <span class="navbar-toggler-icon"></span>
						</button>
					</nav>                

				    <div class="collapse" id="menuHome">
				    	<button  href="#" type="button" class="close d-xl-none" aria-label="Close"  data-toggle="collapse" data-target="#menuHome" aria-expanded="false" aria-controls="menuHome">
						  <span aria-hidden="true">&times;</span>
						</button>
				        <ul class="nav flex-column" id="exCollapsingNavbar3">
				            <li class="nav-item">
				                <a class="nav-link active" href="#">Active</a>
				            </li>
				            <li class="nav-item">
				                <a class="nav-link" href="#">Link</a>
				            </li>
				            <li class="nav-item">
				                <a class="nav-link" href="#">Link</a>
				            </li>
				            <li class="nav-item">
				                <a class="nav-link disabled" href="#">Disabled</a>
				            </li>
				        </ul>
				    </div>
				</div> <!-- container -->
			</header>

			<div class="homeLogoTablet d-flex d-xl-none">
			  <div class="inner"></div>
			  <div class="innerMain"></div>
			  <div class="inner inner2"></div>
			</div>



			<footer class="homeFooter fixed-bottom text-right">
				<div class="">
					<a href="/terms-conditions" title="Terms & Conditions">Terms & Conditions <span></span></a>
				</div>

			</footer>
		</div>
	</div>

</div>
<?php get_footer(); ?>