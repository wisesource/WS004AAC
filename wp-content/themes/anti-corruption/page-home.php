<?php get_header(); ?>

<header class="headerHome">
	<div class="container d-flex">
		<div class="order-1 ml-auto">ՀԱՅ</div>

		<nav class="order-2 navbar navbar-light bg-light  ">
			<button class="hidden-md-up navbar-togglerd-block  ml-auto " type="button" data-toggle="collapse" data-target="#menuHome" aria-expanded="false" aria-controls="menuHome">
			    <span class="navbar-toggler-icon"></span>
			</button>
		</nav>                

	    <div class="collapse" id="menuHome">
	    	<button  href="#" type="button" class="close" aria-label="Close"  data-toggle="collapse" data-target="#menuHome" aria-expanded="false" aria-controls="menuHome">
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

<div class="homeLogo text-center d-sm-none d-md-none d-lg-block ">
	<img class="" src="<?php echo get_template_directory_uri(); ?>/images/logoHq.png" alt="Art of Anti-Corruption">
</div>

<div class="homeLogoTablet d-none d-md-flex d-lg-none">
  <div class="inner"></div>
  <div class="innerMain"></div>
  <div class="inner inner2"></div>
</div>

<footer class="homeFooter fixed-bottom text-right">
	<div class="container">
		<a href="/terms-conditions" title="Terms & Conditions">Terms & Conditions <span></span></a>
	</div>

</footer>
<?php get_footer(); ?>