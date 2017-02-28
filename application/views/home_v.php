<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE-edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="assets/img/tendean.ico" type=image/x-icon rel="shortcut icon">
	
	<title>Tendean Residences</title>

	<!-- css assets -->
	<?php $this->load->view('css_v'); ?>

</head>
<body>

	<!-- navbar top -->
	<nav class="navbar navbar-default navbar-fixed-top main-nav-top">
	  <div class="container">
	    <!-- Brand and toggle get grouped for better mobile display -->
	    <div class="navbar-header">
	      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
	        <span class="sr-only">Toggle navigation</span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	      </button>
	    </div>

	    <!-- Collect the nav links, forms, and other content for toggling -->
	    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	      <ul class="nav navbar-nav brand-link">
	        <li><a href="#">TENDEAN RESIDENCE-Jl.Kapten Tendean(Wolter Monginsidi) 127,Jakarta Selatan-12180</a></li>
	      </ul>
	      <ul class="nav navbar-nav navbar-right">
	        <li><a href="#home" rel="nav-anchor">HOME</a></li>
	        <li><a href="#about-us" rel="nav-anchor">ABOUT US</a></li>
	        <li><a href="#gallery" rel="nav-anchor">GALLERY</a></li>
	        <li><a href="#facility" rel="nav-anchor">FACILITY</a></li>
	        <li><a href="#contact-us" rel="nav-anchor">CONTACT US</a></li>
	      </ul>
	    </div>

	    <a href="">
			<img src="assets/img/tendean-logo-brand.png" alt="tendean-logo-brand">
		</a>

	  </div>
	</nav>

	<!-- intro -->
	<section class="intro" id="home">
		<img src="assets/img/rilex-room.jpg" alt="intro-background">
		<div class="intro-info">
			<h1>TENDEAN RESIDENCE</h1>
			<h4>THE PERFECT SANCTUARY FROM BUSY JAKARTA</h4>
			<a href="#" class="btn btn-default">BOOK NOW <i class="fa fa-calendar" aria-hidden="true"></i></a>
		</div>
	</section>

	<!-- availability schedule -->
	<section class="container availbility-schedule">
		<form class="form-inline">
		  <div class="form-group"></label>
		    <div class="input-group">
		      <div class="input-group-addon"><i class="fa fa-calendar" aria-hidden="true"></i></div>
		      <input type="text" class="form-control" name="daterange" value="01/01/2015 - 01/31/2015">
		    </div>
		  </div>
		  <button type="submit" class="btn btn-primary">CHECK AVAILABILITY</button>
		</form>
	</section>

	<!-- welcoming -->
	<section class="container welcoming" id="about-us">
		<h1>WELCOME TO<br>TENDEAN RESIDENCE</h1>
		<p>Do Jakarta differently, at Tendean Residence. Have the independence of your own home with all our services and benefit from our unrivalled position in the heart of Jakarta.</p>
		<a href="#" class="btn btn-default">MORE DETAIL</a>
	</section>

	<!-- gallery -->
	<section class="container gallery" id="gallery">
		<div class="row">
			<div class="col-md-3 col-sm-3">
				<a href="assets/img/gallery1.jpg" class="gallery-popup">
					<img src="assets/img/gallery1.jpg">
				</a>
			</div>
			<div class="col-md-3 col-sm-3">
				<a href="assets/img/gallery2.jpg" class="gallery-popup">
					<img src="assets/img/gallery2.jpg">
				</a>
			</div>
			<div class="col-md-3 col-sm-3">
				<a href="assets/img/gallery3.jpg" class="gallery-popup">
					<img src="assets/img/gallery3.jpg">
				</a>
			</div>
			<div class="col-md-3 col-sm-3">
				<a href="assets/img/gallery4.jpg" class="gallery-popup">
					<img src="assets/img/gallery4.jpg">
				</a>
			</div>
			<div class="col-md-3 col-sm-3">
				<a href="assets/img/gallery5.jpg" class="gallery-popup">
					<img src="assets/img/gallery5.jpg">
				</a>
			</div>
			<div class="col-md-3 col-sm-3">
				<a href="assets/img/gallery6.jpg" class="gallery-popup">
					<img src="assets/img/gallery6.jpg">
				</a>
			</div>
			<div class="col-md-3 col-sm-3">
				<a href="assets/img/gallery7.jpg" class="gallery-popup">
					<img src="assets/img/gallery7.jpg">
				</a>
			</div>
			<div class="col-md-3 col-sm-3">
				<a href="assets/img/gallery8.jpg" class="gallery-popup">
					<img src="assets/img/gallery8.jpg">
				</a>
			</div>
		</div>
	</section>

	<!-- lifestyle -->
	<section class="container-fluid lifestyle">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-sm-6"></div>
				<div class="col-md-6 col-sm-6">
					<div>
						<h4>HOTEL LIFESTYLE</h4>
						<h3>TURNING MOMENTS INTO MEMORIES</h3>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
						<a href="#" class="btn btn-default">LEARN MORE</a>
					</div>
				</div>
			</div>
		</div>
		<img src="assets/img/features.jpg">
	</section>

	<!-- experience -->
	<section class="container experience" id="facility">
		<div class="heading">
			<h4>HOTEL EXPERIENCE</h4>
			<h3>FACILITY HOTEL</h3>
		</div>
		<div class="row list-experience">
			<div class="col-md-4 col-sm-4">
				<div>
					<img src="assets/img/gallery6.jpg">
					<a href="#" class="btn btn-default">Complete Gymnastic Full Air Con</a>
				</div>
			</div>
			<div class="col-md-4 col-sm-4">
				<div>
					<img src="assets/img/gallery7.jpg">
					<a href="#" class="btn btn-default">Internal Parking Lot</a>
				</div>
			</div>
			<div class="col-md-4 col-sm-4">
				<div>
					<img src="assets/img/gallery8.jpg">
					<a href="#" class="btn btn-default">Kitchen Set on Every Floor</a>
				</div>
			</div>
		</div>
	</section>

	<!-- philosophy -->
	<section class="container-fluid philosophy">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-sm-6">
					<div>
						<h4>FOOD PHILOSOPHY</h4>
						<h3>A TRULY MEMORABLE<br>DINING EXPERIENCE</h3>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
						<a href="#" class="btn btn-default">LEARN MORE</a>
					</div>
				</div>
				<div class="col-md-6 col-sm-6"></div>
			</div>
		</div>
		<img src="assets/img/philosophy.jpg">
	</section>

	<!-- footer -->
	<footer id="contact-us">
		<div class="maps">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.1904588986117!2d106.81490194995148!3d-6.23860999546196!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f160100096ab%3A0x6dbb5082311d9026!2sTENDEAN+RESIDENCES!5e0!3m2!1sen!2sid!4v1487898437245" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
		</div>
		<div class="container">
			<button class="btn btn-default" data-toggle="modal" data-target="#contact-us-modal">Contact Us</button>
			<h4>&copy 2014 TENDEAN RESIDENCE. ALL RIGHTS RESERVED.</h4>
			<ul class="social-media">
				<li><a href="#"><img src="assets/img/facebook-logo.png"></a></li>
				<li><a href="#"><img src="assets/img/twitter-logo.png"></a></li>
				<li><a href="#"><img src="assets/img/instagram-logo.png"></a></li>
				<li><a href="#"><img src="assets/img/youtube-logo.png"></a></li>
			</ul>
		</div>
	</footer>

	<!-- contact us modal -->
	<div class="modal fade contact-us-modal" tabindex="-1" role="dialog" id="contact-us-modal">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        <h4 class="modal-title">CONTACT US</h4>
	      </div>
	      <div class="modal-body">
	        	<form action="#" method="post" id="contact-us-form">
				  <div class="form-group">
				    <label for="name">Name</label>
				    <input type="text" class="form-control" id="name" placeholder="Name" name="name">
				  </div>
				  <div class="form-group">
				    <label for="email">Email address</label>
				    <input type="email" class="form-control" id="email" placeholder="Email" name="email">
				  </div>
				  <div class="form-group">
				    <label for="comment">Comment</label>
				  	<textarea class="form-control" rows="3" id="comment" name="comment"></textarea>
				  </div>
				  <div class="form-group">
				    <label for="message">Message</label>
				  	<textarea class="form-control" rows="3" id="message" name="message"></textarea>
				  </div>
				  <button type="submit" class="btn btn-default">Submit</button>
				</form>
	      </div>
	    </div>
	  </div>
	</div>

	<!-- js assets -->
	<?php $this->load->view('js_v'); ?>

	<script type="text/javascript">
		$(function() {

			// datepicker
		    $('input[name="daterange"]').daterangepicker();

		    // Initialize popup as usual
			$('.gallery-popup').magnificPopup({
				  type: 'image',
				  mainClass: 'mfp-with-zoom', // this class is for CSS animation below
				  gallery: {
						enabled: true
					},
				  zoom: {
				    enabled: true, // By default it's false, so don't forget to enable it

				    duration: 300, // duration of the effect, in milliseconds
				    easing: 'ease-in-out', // CSS transition easing function

				    // The "opener" function should return the element from which popup will be zoomed in
				    // and to which popup will be scaled down
				    // By defailt it looks for an image tag:
				    opener: function(openerElement) {
				      // openerElement is the element on which popup was initialized, in this case its <a> tag
				      // you don't need to add "opener" option if this code matches your needs, it's defailt one.
				      return openerElement.is('img') ? openerElement : openerElement.find('img');
				    }
				  }

			});

			// nav scroll smoooth
			$('a[rel="nav-anchor"]').click(function(){
			    $('html, body').animate({
			        scrollTop: $( $.attr(this, 'href') ).offset().top + (-50)
			    }, 500);
			    return false;
			});

			// contact us validation
            $("#contact-us-form").validate({
            	rules:{
            		name: {
            			required: true
            		},
            		email: {
            			required: true,
            			email: true
            		},
            		comment: {
            			required: true
            		},
            		message: {
            			required: true
            		},
            	},
            	highlight: function(element) {
		            $(element).closest('.form-group').addClass('has-error');
		        },
		        unhighlight: function(element) {
		            $(element).closest('.form-group').removeClass('has-error');
		        },
		        errorElement: 'span',
		        errorClass: 'help-block',
		        errorPlacement: function(error, element) {
		            if(element.parent('.input-group').length) {
		                error.insertAfter(element.parent());
		            } else {
		                error.insertAfter(element);
		            }
		        }
            });


		});
	</script>

</body>
</html>