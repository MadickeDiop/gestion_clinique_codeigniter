<!DOCTYPE html>
<html lang="en">
<head>
<title>Contact</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Health medical template project">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/styles/bootstrap4/bootstrap.min.css') ?> ">
<link href="<?php echo base_url('assets/plugins/font-awesome-4.7.0/css/font-awesome.min.css') ?> " rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/plugins/OwlCarousel2-2.2.1/owl.carousel.css') ?> ">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/plugins/OwlCarousel2-2.2.1/owl.theme.default.css') ?> ">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/ plugins/OwlCarousel2-2.2.1/animate.css') ?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/styles/main_styles.css') ?> ">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/styles/responsive.css') ?> ">

<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/styles/contact.css') ?> ">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/styles/contact_responsive.css') ?> ">






<style>

#idcontact{

	margin-top: -382px; 
}

 #idtitrecontact { 
  	margin-top: -280px; 
  }
   
  
  #idcontenucontact { 
  	margin-top: -400px; 
  }

</style>




</head>
<body>

    <?php include 'header.php';  ?>
	<?php include 'navbar.php';  ?>





  <!-- Home -->

	<div class="home">
		<div id="idcontact" class="parallax_background parallax-window" data-parallax="scroll" data-image-src="<?php echo base_url('assets/images/contact.jpg')?>" data-speed="0.8"></div>

		<div class="home_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div id="idtitrecontact" class="home_content">
							<div class="home_title">Contact</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Contact -->

	<div id="idcontenucontact" class="contact">
		<div class="container">
			<div class="row">

				<!-- Contact form -->
				<div class="col-lg-8 contact_col">
					<div class="contact_form">
						<div class="contact_title">Get in touch</div>
						<div class="contact_form_container">
							<form action="#" id="contact_form" class="contact_form">
								<input type="text" id="contact_input" class="contact_input" placeholder="Your Name" required="required">
								<input type="email" id="contact_email" class="contact_input" placeholder="Your E-mail" required="required">
								<input type="text" id="contact_subject" class="contact_input" placeholder="Subject" required="required">
								<textarea class="contact_input contact_textarea" id="contact_textarea" placeholder="Message" required="required"></textarea>
								<button class="contact_button" id="contact_button">send message</button>
							</form>
						</div>
					</div>
				</div>

				<!-- Make an Appointment -->
				<div class="col-lg-4 contact_col">
					<div class="info_form_container">
						<div class="info_form_title">Make an Appointment</div>
						<form action="#" class="info_form" id="info_form">
							<select name="info_form_dep" id="info_form_dep" class="info_form_dep info_input info_select">
								<option>Department</option>
								<option>Department</option>
								<option>Department</option>
							</select>
							<select name="info_form_doc" id="info_form_doc" class="info_form_doc info_input info_select">
								<option>Doctor</option>
								<option>Doctor</option>
								<option>Doctor</option>
							</select>
							<input type="text" class="info_input" placeholder="Name" required="required">
							<input type="text" class="info_input" placeholder="Phone No">
							<button class="info_form_button">make an appointment</button>
						</form>
					</div>
				</div>

				<!-- contact info -->
				<div class="contact_info">
					<div class="row">
						<div class="col-lg-3 offset-lg-1">
							<div class="contact_info_list">
								<div class="contact_info_title">Contact Info</div>
								<ul>
									<li><span>Address: </span>Mitlton Str. 26-27 Gibraltar</li>
									<li><span>Email: </span>yourmail@gmail.com</li>
									<li><span>Phone: </span>+53 345 7953 32453</li>
								</ul>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="contact_info_list contact_info_list_2">
								<ul>
									<li><span>Address: </span>Mitlton Str. 26-27 London UK</li>
									<li><span>Email: </span>yourmail@gmail.com</li>
									<li><span>Phone: </span>+53 345 7953 32453</li>
								</ul>
							</div>
						</div>
						<div class="col-lg-3">
							<div class="contact_info_list">
								<div class="contact_info_title">Opening Hours</div>
								<ul>
									<li class="d-flex flex-row align-items-center justify-content-start">
										<div>Monday-Thursday</div>
										<div class="ml-auto">8.00 - 19.00</div>
									</li>
									<li class="d-flex flex-row align-items-center justify-content-start">
										<div>Friday</div>
										<div class="ml-auto">8.00 - 18.30</div>
									</li>
									<li class="d-flex flex-row align-items-center justify-content-start">
										<div>Saturday</div>
										<div class="ml-auto">9.30 - 17.00</div>
									</li>
									<li class="d-flex flex-row align-items-center justify-content-start">
										<div>Sunday</div>
										<div class="ml-auto">9.30 - 15.00</div>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Google Map -->

	<div class="contact_map">
		<!-- Google Map -->
		<div class="map">
			<div id="google_map" class="google_map">
				<div class="map_container">
					<div id="map"></div>
				</div>
			</div>
		</div>
	</div>








  <?php include 'footer.php';  ?>






<script src="<?php echo base_url('assets/js/jquery-3.3.1.min.js') ?> "></script>
<script src="<?php echo base_url('assets/styles/bootstrap4/popper.js') ?> "></script>
<script src="<?php echo base_url('assets/styles/bootstrap4/bootstrap.min.js') ?> "></script>
<script src="<?php echo base_url('assets/plugins/OwlCarousel2-2.2.1/owl.carousel.js') ?> "></script>
<script src="<?php echo base_url('assets/plugins/easing/easing.js') ?> "></script>
<script src="<?php echo base_url('assets/plugins/parallax-js-master/parallax.min.js') ?> "></script>
<script src="<?php echo base_url('assets/js/custom.js') ?> "></script>



<script src="<?php echo base_url('assets/plugins/greensock/TweenMax.min.js') ?>"></script>
<script src="<?php echo base_url('assets/plugins/greensock/TimelineMax.min.js') ?> "></script>
<script src="<?php echo base_url('assets/plugins/scrollmagic/ScrollMagic.min.js') ?> "></script>
<script src="<?php echo base_url('assets/plugins/greensock/animation.gsap.min.js') ?> "></script>
<script src="<?php echo base_url('assets/plugins/greensock/ScrollToPlugin.min.js') ?> "></script>
<script src="<?php echo base_url('assets/plugins/easing/easing.js') ?> "></script>
<script src="<?php echo base_url('assets/js/contact.js') ?> "></script>
</body>
</html>












