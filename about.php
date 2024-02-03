<?php require 'include/header.php';?>
<?php

$page = explode('/',$_SERVER['PHP_SELF']);
$End = end($page);
$end = explode('.',$End);
$final_page = $end[0];
?>

<!--------------------About page------------------>
	<div id="about_page">
<!-----------------------Slider Section Start------------------------------->
		<div id="about_slider">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-sm-6">
							<section id="slider_section">
							<div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
								<div class="carousel-inner">
								<div class="carousel-item active">
									<img src="..." class="d-block w-100" alt="1st Slider">
								</div>
								<div class="carousel-item">
									<img src="..." class="d-block w-100" alt="2nd Slider">
								</div>
								<div class="carousel-item">
									<img src="..." class="d-block w-100" alt="3rd Slider">
								</div>
								</div>
								<a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
								<span class="carousel-control-prev-icon" aria-hidden="true"></span>
								<span class="sr-only">Previous</span>
								</a>
								<a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
								<span class="carousel-control-next-icon" aria-hidden="true"></span>
								<span class="sr-only">Next</span>
								</a>
							</div>
						</section>
					</div>
					<div class="col-sm-6 col-md-6 about-content">
						<h2>ABOUT <strong>US</strong></h2>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam necessitatibus ullam voluptas dignissimos rerum cum dolorum minus. Neque dicta provident omnis in ipsum. Ratione ut, assumenda sint hic itaque consectetur quibusdam, in fuga sunt nostrum quod qui esse ?</p>
						<div class="btn btn-primary read_more">read more <i class="fa fa-angle-double-right" aria-hidden="true"></i></div>
					</div>
				</div>
			</div>
		</div>
		
		<!--------------------Slider section End-------------------------->

		<!-- <div id="about_header" class="bg-light">
			<div class="container">
				<div class="row">
					<div class="col-sm-1"></div>
					<div class="col-sm-10">
						<nav>
							<ul>
								<li><h4>About Us</h4></li>
								<li><a href="index" class="text-success">Home / </a> <span> ABOUT US</span></li>
							</ul>
						</nav>
					</div>
				</div>
				
			</div>
		</div> -->
		<div class="about_bottom">
			<div class="hr">
				<hr class="about_special_hr">
			</div>
			<div class="about_bottom_cotent">
				<div class="container">
					<div class="row">
						<div class="col-sm-4 col-md-4">
							<div class="card text-white bg-custom mb-3" style="max-width: 18rem;">
							<div class="card-body">
								<div class="card_image">
									<img src="" alt="">
								</div>
								<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
								<hr>
								<h5 class="text-center">Mr. Hossain</h5>
								<h6> <strong>Chairman, </strong> DDC&GH </h6>
							</div>
							</div>
						</div>

						<div class="col-sm-4 col-md-4">
							<div class="card text-white bg-custom mb-3" style="max-width: 18rem;">
							<div class="card-body">
								<div class="card_image">
									<img src="" alt="">
								</div>
								<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
								<hr>
								<h5 class="text-center">Mr. Hossain</h5>
								<h6> <strong>Chairman, </strong> DDC&GH </h6>
							</div>
							</div>
						</div>

						<div class="col-sm-4 col-md-4">
							<div class="card text-white bg-custom mb-3" style="max-width: 18rem;">
							<div class="card-body">
								<div class="card_image">
									<img src="" alt="">
								</div>
								<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
								<hr>
								<h5 class="text-center">Mr. Hossain</h5>
								<h6> <strong>Chairman, </strong> DDC&GH </h6>
							</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>







<!--------------------Footer Section Start--------------------->
<?php require 'include/footer.php';?>
