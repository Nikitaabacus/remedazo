<!-- Footer start here -->
<footer class="main_footer">
	<div class="footer_links">
		<div class="container footer_con">
		  <div class="footer_social_icons">
			  <ul>
				  <li><a href="mailto:contact@remedazo.com"><i class="fa fa-envelope"></i></a></li>
				  <li><a href="https://www.facebook.com/Remedazomedicaltourism" target="_blank"><i class="fa fa-facebook"></i></a></li>
				  <li><a href="https://www.instagram.com/remedazo" target="_blank"><i class="fa fa-instagram"></i></a></li>
				  <li><a href="https://twitter.com/remedazo" target="_blank"><i class="fa fa-twitter"></i></a></li>
				  <li><a href="https://www.linkedin.com/company/34221336/admin" target="_blank"><i class="fa fa-linkedin"></i></a></li>
			  </ul>
		  </div>
		  <div class="row">
			<div class="col-sm-3">
				<div class="widget">
					<h4>Business Login</h4>
					<ul>
						<li><a href="http://remedazo.com/hospital/login.php">Hospital Login</a></li>
						<li><a href="http://remedazo.com/hotel/login.php">Hotel Login</a></li>
						<li><a href="http://remedazo.com/transport/login.php">Transport</a></li>
						<li><a href="#">Remedazo Team</a></li>
					</ul>
				</div>
			</div>
			<div class="col-sm-2">
				<div class="widget">
					<h4>Partner Login</h4>
					<ul>
						<li><a href="http://remedazo.com/doctor/login.php">Doctor</a></li>
						<li><a href="http://remedazo.com/franchise/">Franchise</a></li>
						<li><a href="http://remedazo.com/franchise/franchise_login.php">Franchise</a></li>
						<li><a href="#">Login Test</a></li>
					</ul>
				</div>
			</div>
			<div class="col-sm-3">
				<div class="widget">
					<h4>Keep Connected</h4>
					<ul>
						<li><a href="https://www.facebook.com/Remedazomedicaltourism" target="_blank">Like us on Facebook</a></li>
						<li><a href="https://twitter.com/remedazo" target="_blank">Follow us on Twitter</a></li>
						<li><a href="#">Follow us on Dribbble</a></li>
						<li><a href="#">Follow us on Pinterest</a></li>
					</ul>
				</div>
			</div>
			<div class="col-sm-4 pl-0">
				<div class="widget last_footer">
					<h4>Where we are?</h4>
					<p>Remedazo Global Medical Tourism 320,
					Ocus Quantum, Sector-51 Gurgaon.</p>
					
					<h4 class="reach">Reach us here.</h4>
					<ul>
						<li><a href="tel:+919999012346">+91 9999012346 |</a></li>
						<li><a href="mailto:contact@remedazo.com">contact@remedazo.com</a></li>
					</ul>
				</div>
			</div>
		  </div>
		</div>
	</div>
	<div class="bottom_footer text-center">
	  <div class="container border_top footer_con">
		<p>© 2018 Remedazo Global Medical Tourism. All Rights Reserved</p>
	  </div>
	</div>
</footer>
<!-- For Styled alert boxes -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
 <script src="<?php echo BASE_URL_ROOT; ?>js/sweetalert-dev.js"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/jquery.slick/1.4.1/slick.min.js"></script>
<script>
/*Slider function [It is recommended to place a function in a separate JS file, such as "functions.js"]*/
function myCoolSlider() {
        $('#featured-content').slick({
            dots: false,
            infinite: true,
            speed: 300,
            slidesToShow: 3,
            slidesToScroll: 3,
            responsive: [{
                breakpoint: 1200,
                settings: {
                    slidesToShow: 4,
                    slidesToScroll: 4,
                    infinite: true,
                    dots: true
                }
            }, {
                breakpoint: 992,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3
                }
            }, {
                breakpoint: 768,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }, {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }]
        });
    }
    /*End of Slider function*/
$(document).ready(function() {
/*Calling the function [It is recommended to call a function in a separate JS file, such as "scripts.js"]*/
    myCoolSlider();
/*.................End of call*/


});

$(document).ready(function()
{
	//Add Inactive Class To All Accordion Headers
	$('.accordion-header').toggleClass('inactive-header');
	
	//Set The Accordion Content Width
	var contentwidth = $('.accordion-header').width();
	$('.accordion-content').css({'width' : contentwidth });
	
	//Open The First Accordion Section When Page Loads
	$('.accordion-header').first().toggleClass('active-header').toggleClass('inactive-header');
	$('.accordion-content').first().slideDown().toggleClass('open-content');
	
	// The Accordion Effect
	$('.accordion-header').click(function () {
		if($(this).is('.inactive-header')) {
			$('.active-header').toggleClass('active-header').toggleClass('inactive-header').next().slideToggle().toggleClass('open-content');
			$(this).toggleClass('active-header').toggleClass('inactive-header');
			$(this).next().slideToggle().toggleClass('open-content');
		}
		
		else {
			$(this).toggleClass('active-header').toggleClass('inactive-header');
			$(this).next().slideToggle().toggleClass('open-content');
		}
	});
	
	return false;
});
</script>
<script type="text/javascript" src="<?php echo BASE_URL_ROOT; ?>js/test.js"></script>
<script type="text/javascript" src="<?php echo BASE_URL_ROOT; ?>js/jquery.timepicker.js"></script>
 <script type="text/javascript" src="<?php echo BASE_URL_ROOT; ?>js/bootstrap-datepicker.js"></script>
<script type="text/javascript" src="<?php echo BASE_URL_ROOT; ?>js/datepair.js"></script>
<script type="text/javascript" src="<?php echo BASE_URL_ROOT; ?>js/jquery.datepair.js"></script>
<script type="text/javascript" src="<?php echo BASE_URL_ROOT; ?>js/jquery.buttonLoader.js"></script>
<script type="text/javascript" src="<?php echo BASE_URL_ROOT; ?>js/modernizr.custom.79639.js"></script>	

<!-- Mobile menu script files here -->
<script type="text/javascript" src="<?php echo BASE_URL_ROOT; ?>js/modernizr.js"></script>
<script type="text/javascript" src="<?php echo BASE_URL_ROOT; ?>js/jquery.mobile.custom.min.js"></script>
<script type="text/javascript" src="<?php echo BASE_URL_ROOT; ?>js/main.js"></script>

<!-- js for news -->
<script src="<?php echo BASE_URL_ROOT; ?>js/jquery.easing.min.js"></script>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="<?php echo BASE_URL_ROOT; ?>js/bootstrap.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>	
<script src="<?php echo BASE_URL_ROOT; ?>js/modernizr.custom.js"></script>
<script type="text/javascript" src="<?php echo BASE_URL_ROOT; ?>js/pignose.layerslider.js"></script>
<script src="http://maps.google.com/maps/api/js?key=AIzaSyAP-JpMk5qncaf9RiwbhbBx5FN1OZO9Swg&amp;libraries=places" type="text/javascript"></script>
<script type="text/javascript">
			//<![CDATA[
				$(window).load(function() {
					$('#visual').pignoseLayerSlider({
						play    : '.btn-play',
						pause   : '.btn-pause',
						next    : '.btn-next',
						prev    : '.btn-prev'
					});
				});
			//]]>
			</script>
		<!-- /js for news -->
<!-- for smooth scrolling -->
<script type="text/javascript" src="<?php echo BASE_URL_ROOT; ?>js/move-top.js"></script>
<script type="text/javascript" src="<?php echo BASE_URL_ROOT; ?>js/easing.js"></script>
<script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){		
				event.preventDefault();
				$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
			});
		});
</script>
<!-- Footer end here -->
<script src="//geodata.solutions/includes/countrystatecity.js"></script>
</body>
</html>