	<!--------------------Footer Section Start--------------------->

		<section id="footer_section">
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<h6>Contact Us</h6>
						<ul>
							<li>Puratan Dhak Bangla (Bypass Bosurhat Road), <br> Dagonbhuiyan, Feni.</li>
							<li>Mobile : 01817-732042</li>
							<li class="another_num">01839979190</li>
							<li>Email : ddcenter2011@gmail.com</li>
						</ul>
						<ul  class="social_links">
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-youtube-play"></i></a></li>
							<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#"><i class="fa fa-instagram"></i></a></li>
						</ul>
					</div>

					<div class="col-sm-4">
						<h6>Important Links</h6>
						<ul>
							<li><a href="#">Dagonbhuiyan Hospital</a></li>
							<li><a href="#">Al Baraka Hospital</a></li>
							<li><a href="#">Gov. Hospital</a></li>
							<li><a href="#">Management Team</a></li>

						</ul>
					</div>

					<div class="col-sm-4">
						<h6>Quick Links</h6>
						<ul>
							<li><a href="#">Our Services</a></li>
							<li><a href="#">Our Branches</a></li>
							<li><a href="#">Call for Appointmet</a></li>
							<li><a href="#">Finds Doctors</a></li>
							<li><a href="#">Gallery</a></li>
							<li><a href="#">Sitemap</a></li>
						</ul>
					</div>
				</div>
				<div class="footer_copyright_section">
					<div class="row">
						<div class="col-sm-4"><p>&copy; Copyright 2010 - <?= date('Y') ?>. Dagonbhuiyan Diabetic Center & Generel Hospital.</p>
					</div>
						<div class="col-sm-4">
							<ul>
								<li><a href="#">Terms & Conditions</a></li>
								<li><a href="#">Privacy Policy</a></li>
								<li><a href="#">Customer Support</a></li>
							</ul>
						</div>
						<div class="col-sm-4">
							<p>12345 Total Views</p>
						</div>

						
					</div>
				</div>
				<!----------------------Developer Section----------------------->
					<div class="developer ">
						<a href="https://amir-hosen.netlify.app/" target="_blank">Contact With Developer</a>
					</div>
					<!----------------------Developer Section----------------------->
			</div>
		</section>
		<!----------------------Footer Section end----------------------->
	</div>

	<div class="to-top">
		<i class="fa fa-chevron-up"></i>
	</div>


	<!-------------Javascript files-------------->
	<!-----------------Jquery file---------------->
	<script src="assets/js/jqueryfile.js"></script>
	<!---------------Bootstrap Js----------------->
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/main.js"></script>
	<script>
		$(document).ready(function(){
			$(".to-top").click(function(){
				$("html, body").animate({scrollTop:0},1000);
			});

			$(window).scroll(function(){
				if($(window).scrollTop() > 500){
					$(".to-top").show();
				}else{
					$(".to-top").hide();
				}
			});

			// ACCORDION
					$('.section-title').click(function(e) {
						// Get current link value
						var currentLink = $(this).attr('href');
						if($(e.target).is('.active')) {
							close_section();
						}else {
							close_section();
						// Add active class to section title
						$(this).addClass('active');
						// Display the hidden content
						$('.accordion ' + currentLink).slideDown(350).addClass('open');
						}
					e.preventDefault();
					});
						
					function close_section() {
						$('.accordion .section-title').removeClass('active');
						$('.accordion .section-content').removeClass('open').slideUp(350);
					}
		});

		
	</script>
</body>
</html>


