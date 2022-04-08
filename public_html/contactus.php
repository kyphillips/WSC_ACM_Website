<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>ACM Landing Page</title>

		<!--misc.css contains miscelanious css that doesn't fit into text, Content, images, etc'-->
        <link rel="stylesheet" href="Resources/CSS/shared.css" />
		<link rel="stylesheet" href="Resources/CSS/misc.css">
		<link rel="stylesheet" href="Resources/CSS/ContactUs.css">
        

		<link rel="stylesheet" href="Resources/Landingpage/CSS/LandingVideo/LandingVideo.css">

		 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

		<!-- Bootstrap CSS -->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />

		<!-- Option 1: Bootstrap Bundle with Popper -->
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


	</head>

	<body>

		<?php
			include 'Resources/Shared/PHP/Navbar.php';
		?>

	<div class="row g-0 justify-content-center ">
		

			<div class="col-lg-5 col-md-5 col-sm-12 col-12">
			
				<div class="DarkBlueRounded h-100">
						<div class="header-main white">Contact Us</div>

						<div class="row g-1 justify-content-center">
							<div class="col-lg-5 col-md-5 col-10">
								<div class="contact-container">
									<div class="contact-title">
										President
									</div>

									<div class="contact-name">
										Timothy Garvin
									</div>

									<div class="contact-image">
										<img class="contact-image" src="Resources\Images\headshot02.jpg" />
									</div>

									<div class="contact-email">
										sagebr001@wsc.edu
									</div>
								</div>
							</div>

							<div class="col-lg-5 col-md-5 col-10">
								<div class="contact-container">
									<div class="contact-title">
										President
									</div>

									<div class="contact-name">
										Saron Gebre
									</div>

									<div class="contact-image">
										<img class="contact-image" src="Resources\Images\headshot01.jpg" />
									</div>

									<div class="contact-email">
										sagebr001@wsc.edu
									</div>
								</div>
							</div>
						</div>

						<div class="row g-1 justify-content-center">
							<div class="col-lg-5 col-md-5 col-10">
								<div class="contact-container">
									<div class="contact-title">
										President
									</div>

									<div class="contact-name">
										Timothy Garvin
									</div>

									<div class="contact-image">
										<img class="contact-image" src="Resources\Images\headshot03.jpg" />
									</div>

									<div class="contact-email">
										sagebr001@wsc.edu
									</div>
								</div>
							</div>

							<div class="col-lg-5 col-md-5 col-10">
								<div class="contact-container">
									<div class="contact-title">
										President
									</div>

									<div class="contact-name">
										Saron Gebre
									</div>

									<div class="contact-image">
										<img class="contact-image" src="Resources\Images\headshot01.jpg" />
									</div>

									<div class="contact-email">
										sagebr001@wsc.edu
									</div>
								</div>
							</div>
						</div>

						<div class="row g-1 justify-content-center">
							<div class="col-lg-5 col-md-5 col-10">
								<div class="contact-container">
									<div class="contact-title">
										President
									</div>

									<div class="contact-name">
										Timothy Garvin
									</div>

									<div class="contact-image">
										<img class="contact-image" src="Resources\Images\headshot02.jpg" />
									</div>

									<div class="contact-email">
										sagebr001@wsc.edu
									</div>
								</div>
							</div>

							<div class="col-lg-5 col-md-5 col-10">
								<div class="contact-container">
									<div class="contact-title">
										President
									</div>

									<div class="contact-name">
										Saron Gebre
									</div>

									<div class="contact-image">
										<img class="contact-image" src="Resources\Images\headshot03.jpg" />
									</div>

									<div class="contact-email">
										sagebr001@wsc.edu
									</div>
								</div>
							</div>
						</div>

				</div>
			</div>

			<div class="col-lg-5 col-md-5 col-sm-12 col-12">
				<div class="LightBlueRounded h-100">
					<div class="header-main blue">Get in Touch!</div>
					<div class="header-secondary">We'd love to hear from you!</div>
					<form>
						<div class="mb-4">
							
							<label for="exampleInputEmail1" class="form-label">Email address</label>
							<input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
						</div>
						<div class="row">
							<div class="mb-4 col-6">
								<label for="exampleInputPassword1" class="form-label">Email</label>
								<input type="email" class="form-control" id="exampleInputPassword1">
							</div>

							<div class="mb-4 col-6">
								<label for="exampleInputPassword1" class="form-label">Phone</label>
								<input type="text" class="form-control" id="exampleInputPassword1">
							</div>
						</div>

						<div class="mb-4">
							<label for="exampleFormControlTextarea1" class="form-label">Message</label>
							<input type ="text" class="form-control fill-field" id="exampleFormControlTextarea1" />
						</div>

						<div class="row justify-content-center mt-4">
							<button type="submit" class="btn btn-primary btn-send">Send</button>
						</div>
					</form>
				</div>
			</div>
			
	</div>

	
	</body>

</html>

