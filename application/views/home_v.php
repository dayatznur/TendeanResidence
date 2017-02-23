<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE-edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
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
	        <li><a href="#">HOME</a></li>
	        <li><a href="#">ABOUT US</a></li>
	        <li><a href="#">GALLERY</a></li>
	        <li><a href="#">FACILITY</a></li>
	        <li><a href="#">CONTACT US</a></li>
	      </ul>
	    </div>

	    <a href="">
			<img src="assets/img/tendean-logo-brand.png" alt="tendean-logo-brand">
		</a>

	  </div>
	</nav>

	<!-- intro -->
	<section class="intro">
		<img src="assets/img/rilex-room.jpg" alt="intro-background">
		<div class="intro-info">
			<h1>TENDEAN RESIDENCE</h1>
			<h4>THE PERFECT SANCTUARY FROM BUSY JAKARTA</h4>
			<a href="#" class="btn btn-default">BOOK NOW <i class="fa fa-calendar" aria-hidden="true"></i></a>
		</div>
	</section>

	<!-- availability schedule -->
	<div class="container availbility-schedule">
		<form class="form-inline">
		  <div class="form-group"></label>
		    <div class="input-group">
		      <div class="input-group-addon"><i class="fa fa-calendar" aria-hidden="true"></i></div>
		      <input type="text" class="form-control" name="daterange" value="01/01/2015 - 01/31/2015">
		    </div>
		  </div>
		  <button type="submit" class="btn btn-primary">CHECK AVAILABILITY</button>
		</form>
	</div>

	<!-- welcoming -->
	<div class="container welcoming">
		<h1>WELCOME TO<br>TENDEAN RESIDENCE</h1>
		<p>Do Jakarta differently, at Tendean Residence. Have the independence of your own home with all our services and benefit from our unrivalled position in the hearth of Jakarta.</p>
		<a href="#" class="btn btn-default">MORE DETAIL</a>
	</div>

	<!-- js assets -->
	<?php $this->load->view('js_v'); ?>

	<script type="text/javascript">
		$(function() {
		    $('input[name="daterange"]').daterangepicker();
		});
	</script>

</body>
</html>