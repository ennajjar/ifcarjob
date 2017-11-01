	
		<footer class="footer" id="footer"> <!-- Footer -->
			<div class="footer-widgets">
				<div class="container">
					<div class="row">
						<div class="col-sm-4 col-md-8 col-md-offset-2">
							<ul class="nav-bottom">
								<li><a href="aboutus.php">Qui sommes nous</a></li>
								<li><a href="#">besoin d'aides</a></li>
								<li><a href="#">mentions légales</a></li>
								<li><a href="#">nos engagements</a></li>
								<li><a href="contact.php">contactez-nous</a></li>
							</ul>
							<ul class="nav-socials-bottom">
								<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-youtube"></i></a></li>
								<li><a href="#"><i class="fa fa-viadeo"></i></a></li>
								
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="footer-copyright">
				<div class="container">
					<div class="row">
						<div class="col-sm-12">
							Copyright &copy; 2017  <a href="#">ifcarjob</a> &nbsp;| &nbsp;All Rights Reserved
						</div>
					</div>
				</div>
			</div>
		</footer> <!-- Footer / End -->
		
	</div> <!-- Main / End -->
</div> <!-- site-wrapper / End -->

<!-- Javascript Files
================================================== -->
<script src="vendor/jquery-1.11.0.min.js"></script>
<script src="vendor/jquery-migrate-1.2.1.min.js"></script>
<script src="vendor/bootstrap.js"></script>
<script src="vendor/jquery.flexnav.min.js"></script>
<script src="vendor/jquery.hoverIntent.minified.js"></script>
<script src="vendor/isotope/jquery.imagesloaded.min.js"></script>
<script src="vendor/magnific-popup/jquery.magnific-popup.js"></script>
<script src="vendor/owl-carousel/owl.carousel.min.js"></script>
<!-- <script src="vendor/jquery.fitvids.js"></script> -->
<script src="vendor/jquery.appear.js"></script>
<script src="vendor/jquery.stellar.min.js"></script>
<script src="vendor/flexslider/jquery.flexslider-min.js"></script>
<script src="vendor/stickykit/jquery.sticky-kit.js"></script>

<!-- Newsletter Form -->
<script src="vendor/jquery.validate.js"></script>
<script src="js/newsletter.js"></script>
<script src="js/custom.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?libraries=places&key=AIzaSyBNALpIgFsITeYppsb4jUAQHasdMKGJY54"></script>
<script type='text/javascript'>
	function init_map(){var myOptions = {zoom:14,center:new google.maps.LatLng(34.0205771,-6.83096409999996),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(34.0205771,-6.83096409999996)});infowindow = new google.maps.InfoWindow({content:'<strong>Ifcarjob</strong><br>Avenue Moulay Rachid, Rabat, Maroc<br>'});google.maps.event.addListener(marker, 'click', function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);
</script>

<script>
	jQuery(function($){
		$('body').addClass('loading');
	});
	
	$(window).load(function(){
		$('.flexslider').flexslider({
			animation: "fade",
			controlNav: true,
			directionNav: false,
			itemHeight:200,
			prevText: "",
			nextText: "",
			start: function(slider){
				$('body').removeClass('loading');
			}
		});
	});
</script>

<script>
	jQuery(function($) {
		$('#Map area[shape=poly]').hover(function() {
			/* Stuff to do when the mouse enters the element */
			var val = $(this).attr('alt');
			if (val!='') {
				$('.info-bulle-ville').html(val);
				$('.info-bulle-ville').fadeIn('slow', function() {
				});
			};

			if ($('.info-bulle-ville').html()=='') {
				$('.info-bulle-ville').hide();	
			};
				$('.info-bulle-ville:empty').hide();
			// console.log('val :' +val);
		}, function() {
			/* Stuff to do when the mouse leaves the element */
			$('.info-bulle-ville').hide();
			$('.info-bulle-ville').html('');

			if ($('.info-bulle-ville').html()=='') {
				$('.info-bulle-ville').hide();	
			};$('.info-bulle-ville:empty').hide();
		});



		$(".btn-pref .btn").click(function () {
		    $(".btn-pref .btn").removeClass("btn-primary btn-primary-blue").addClass("btn-default");
		    // $(".tab").addClass("active"); // instead of this do the below 
		    $(this).removeClass("btn-default").addClass("btn-primary btn-primary-blue");   
		});

		// $("#sidebar, #main_column").stick_in_parent();	
	});
	</script>