<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>ACM Landing Page</title>

		<!--misc.css contains miscelanious css that doesn't fit into text, Content, images, etc'-->
		<link rel="stylesheet" href="Resources/Shared/CSS/misc.css">
		<link rel="stylesheet" href="Resources/Shared/CSS/text.css">
		<link rel="stylesheet" href="Resources/Shared/CSS/container.css">
		<link rel="stylesheet" href="Resources/Shared/CSS/placement.css">

		<link rel="stylesheet" href="Resources/Landingpage/CSS/LandingVideo/LandingVideo.css">

		 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

		<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>


	</head>

	<body>

		<?php
			include 'Resources/Landingpage/PHP/LandingpageVideo.php';
		?>

		<h2 class="Blue Center VW MTB50">
			Not Just A Computer Club
		</h2>

		<div class="row justify-content-center ">

			<div class="col-lg-3 col-md-7 col-sm-12 col-12">
				<img class="FillContainer" src ="Resources\Landingpage\Content\Images\MeetNewPeople.jpg">
			
				<h7 class="Blue VW Center">
					Meet New People
				</h7>
				<p class ="VW Center">
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam vel risus massa. Nulla efficitur lorem at ipsum condimentum interdum. Sed iaculis nisi non laoreet 
					faucibus. Pellentesque scelerisque imperdiet condimentum. Quisque et efficitur mauris. Aenean volutpat dictum justo eu iaculis. 
				</p>
			</div>
	
			<div class="col-lg-3 col-md-7 col-12">
				<img class="FillContainer" src ="Resources\Landingpage\Content\Images\MakeNewFriends.jpg">

				<h7 class="Blue VW Center">
					Make New Friends
				</h7>

				<p class ="VW Center">
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam vel risus massa. Nulla efficitur lorem at ipsum condimentum interdum. Sed iaculis nisi non laoreet 
					faucibus. Pellentesque scelerisque imperdiet condimentum. Quisque et efficitur mauris. Aenean volutpat dictum justo eu iaculis. 
				</p>
			</div>
		
			<div class="col-lg-3 col-md-7 col-12">
				<img class="FillContainer" src ="Resources\Landingpage\Content\Images\BeSocial.jpg">

				<h7 class="Blue VW Center">
					Be Social
				</h7>

				<p class ="VW Center">
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam vel risus massa. Nulla efficitur lorem at ipsum condimentum interdum. Sed iaculis nisi non laoreet faucibus. 
					Pellentesque scelerisque imperdiet condimentum. Quisque et efficitur mauris. Aenean volutpat dictum justo eu iaculis. 
				</p>
			</div>

		</div>

		<h2 class="Blue Center VW MTB50">
			But Wait, There's More!
		</h2>

		<div class="row g-0 justify-content-center">
			<div class="col-lg-5 col-md-10 col-12 order-1">
				<img class="FillContainer" src ="Resources\Landingpage\Content\Images\MakeNewFriends.jpg">
			</div>

			<div class="col-lg-5 col-md-10 col-12 order-2">
				<div class="container d-flex h-100">
					<div class="row justify-content-center align-self-center">
						<div class="col-lg-11 col-md-11 col-12">
							<h7 class="Blue VW">
								Cool Events
							</h7>
							<p class="VW">
								Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam vel risus massa. Nulla efficitur lorem at ipsum condimentum interdum. Sed iaculis nisi non 
								laoreet faucibus. Pellentesque scelerisque imperdiet condimentum. Quisque et efficitur mauris. Aenean volutpat dictum justo eu iaculis. Lorem ipsum dolor sit amet, 
								consectetur adipiscing elit. Nam vel risus massa. Nulla efficitur lorem at ipsum condimentum interdum. Sed iaculis nisi non laoreet faucibus. Pellentesque scelerisque imperdiet condimentum. 
								Quisque et efficitur mauris. Aenean volutpat dictum justo eu iaculis. 
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="row g-0 justify-content-center">
			<div class="col-lg-5 col-md-10 col-12 order-lg-2 order-md-1 order-1">
				<img class="FillContainer" src ="Resources\Landingpage\Content\Images\MakeNewFriends.jpg">
			</div>

			<div class="col-lg-5 col-md-10 col-12 order-lg-1 order-md-2 order-2">
				<div class="container d-flex h-100">
					<div class="row justify-content-center align-self-center">
						<div class="col-lg-11 col-md-11 col-12">
							<h7 class="Blue VW">
								Cool Events
							</h7>
							<p class="VW">
								Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam vel risus massa. Nulla efficitur lorem at ipsum condimentum interdum. Sed iaculis nisi non 
								laoreet faucibus. Pellentesque scelerisque imperdiet condimentum. Quisque et efficitur mauris. Aenean volutpat dictum justo eu iaculis. Lorem ipsum dolor sit amet, 
								consectetur adipiscing elit. Nam vel risus massa. Nulla efficitur lorem at ipsum condimentum interdum. Sed iaculis nisi non laoreet faucibus. Pellentesque scelerisque imperdiet condimentum. 
								Quisque et efficitur mauris. Aenean volutpat dictum justo eu iaculis. 
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="row g-0 justify-content-center">
			<div class="col-lg-5 col-md-10 col-12 order-1">
				<img class="FillContainer" src ="Resources\Landingpage\Content\Images\MakeNewFriends.jpg">
			</div>

			<div class="col-lg-5 col-md-10 col-12 order-2">
				<div class="container d-flex h-100">
					<div class="row justify-content-center align-self-center">
						<div class="col-lg-11 col-md-11 col-12">
							<h7 class="Blue VW">
							Cool Events
							</h7>
							<p class="VW">
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam vel risus massa. Nulla efficitur lorem at ipsum condimentum interdum. Sed iaculis nisi non 
							laoreet faucibus. Pellentesque scelerisque imperdiet condimentum. Quisque et efficitur mauris. Aenean volutpat dictum justo eu iaculis. Lorem ipsum dolor sit amet, 
							consectetur adipiscing elit. Nam vel risus massa. Nulla efficitur lorem at ipsum condimentum interdum. Sed iaculis nisi non laoreet faucibus. Pellentesque scelerisque imperdiet condimentum. 
							Quisque et efficitur mauris. Aenean volutpat dictum justo eu iaculis. 
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	
	</body>

</html>