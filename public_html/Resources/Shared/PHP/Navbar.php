		<nav class="navbar navbar-expand-lg navbar-light opaque">
			<div class="container-fluid">
				<a class="navbar-brand" href="#">
					<img src="Resources/Images/ACM_LandingLogo.jpg" width="30" height="30" alt="">
				</a>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarNavDropdown">
					<ul class="navbar-nav ms-auto">
						<li class="nav-item">
							<a id="homeNav" class="nav-link active" aria-current="page" href="http://localhost/ACM_Website/public_html/home.php#">Home</a>
						</li>
						<li class="nav-item dropdown">
							<a id="eventsNav" class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
								Meetings & Events
							</a>
							<ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
								<li>
									<a class="dropdown-item" href="http://localhost/ACM_Website/public_html/upcomingevents.php">Upcoming</a>
								</li>
								<li>
									<a class="dropdown-item" href="http://localhost/ACM_Website/public_html/pastevents.php">Past</a>
								</li>
							</ul>
						</li>
						<li class="nav-item">
							<a id="aboutNav" class="nav-link" href="http://localhost/ACM_Website/public_html/aboutus.php#">About Us</a>
						</li>
						<li class="nav-item">
							<a id="contactNav" class="nav-link" href="http://localhost/ACM_Website/public_html/contactus.php">Contact Us</a>
						</li>
						<li class="nav-item">
							<a id="joinNav" class="nav-link" href="#"  onclick="joinUsOverlayOn();return false;">Join Us</a>
						</li>
						
					</ul>
				</div>
			</div>
		</nav>
		
		<div id="joinUsOverlay" class="popup-overlay">
			<div class="col-lg-5 col-md-6 col-sm-12 col-12 popup-overlay-container">
				<div class="LightBlueRounded h-100">
					<div class="joinus-header-main">Welcome To The Club!</div>
					
					<form>
						<div class="row">
							<div class="mb-4 col-6">
								<label for="exampleInputEmail1" class="form-label">First Name</label>
								<input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
							</div>

							<div class="mb-4 col-6">
								<label for="exampleInputEmail1" class="form-label">Last Name</label>
								<input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
							</div>

							<div class="mb-4 col-12">
								<label for="exampleInputPassword1" class="form-label">Email Address</label>
								<input type="email" class="form-control" id="exampleInputPassword1">
							</div>

							<div class="mb-4 col-12">
								<label for="exampleInputPassword1" class="form-label">Phone</label>
								<input type="text" class="form-control" id="exampleInputPassword1">
							</div>

							<div class="mb-4 col-6">
								<label for="exampleInputPassword1" class="form-label">Year</label>
								<input type="email" class="form-control" id="exampleInputPassword1">
							</div>

							<div class="mb-4 col-6">
								<label for="exampleInputPassword1" class="form-label">Major</label>
								<input type="text" class="form-control" id="exampleInputPassword1">
							</div>

							<div class="mb-4 col-12">
								<label for="exampleInputPassword1" class="form-label">Interests? (programming, drawing, etc)</label>
								<input type="text" class="form-control" id="exampleInputPassword1">
							</div>
							
							<div class="row justify-content-center m-2 col-5">
								<button type="submit" class="btn btn-primary btn-send">Submit</button>
							</div>

							<div class="row justify-content-center m-2 col-5">
								<button  class="btn btn-primary btn-send" onclick="joinUsOverlayOff();return false;">Close</button>
							</div>
						</div>
					
					</form>
				</div>
			</div>
		</div>

		<script>
			function joinUsOverlayOn()
			{
				document.getElementById("joinUsOverlay").style.display = "block";
			}

			function joinUsOverlayOff()
			{
				document.getElementById("joinUsOverlay").style.display = "none";
			}
		</script>
		
		<style>
			.joinus-header-main
			{
				color: #2891FF;
				font-size: 6vw;
				text-align: center;
				font-weight:bold;
				margin-top:1vw;
				margin-bottom:2vw;
			}
			.opaque 
			{
				background: rgb(0, 0, 0); /* Fallback for older browsers without RGBA-support */
				background: rgba(0, 0, 0, 0.0);
				border-bottom-style:solid;
				border-color:  rgba(0, 0, 0, 0.2);
				border-width:1px;
				margin-bottom:2vw;
			}
			.nav-item 
			{
			margin-right:3vw;
			font-size:6vw;
			}

			.active 
			{
				text-decoration: underline;     
				text-decoration-color: blue;  	
			}

			.dropdown-item 
			{
				font-size:6vw;
			}

			@media (min-width: 576px) 
			{
				.nav-item 
				{
				
				font-size:3vw;
				}

				.dropdown-item 
				{
					font-size:3vw;
				}
				.joinus-header-main {
                    font-size: 6vw;
                }
			}

			@media (min-width: 768px) 
			{
				.nav-item 
				{
				
				font-size:2vw;
				}

				.dropdown-item 
				{
					font-size:2vw;
				}
				.joinus-header-main {
                    font-size: 3vw;
                }

			}

			@media (min-width: 992px) 
			{
				.nav-item 
				{
					font-size:1.5vw;
				}

				.dropdown-item 
				{
					font-size:1.5vw;
				}
				.joinus-header-main {
                    font-size: 3vw;
                }

			}
		</style>

		<script>

			var currentURL = window.location.href;

			var homeNav = document.getElementById("homeNav");
			var eventsNav = document.getElementById("eventsNav");
			var aboutNav = document.getElementById("aboutNav");
			var joinNav = document.getElementById("joinNav");
			var contactNav = document.getElementById("contactNav");

			homeNav.classList.remove("active");
			eventsNav.classList.remove("active");
			aboutNav.classList.remove("active");
			joinNav.classList.remove("active");
			contactNav.classList.remove("active");

			if (currentURL.includes("home"))
			{
				homeNav.classList.add("active");
			}
			if (currentURL.includes("event"))
			{
				eventsNav.classList.add("active");
			}
			if (currentURL.includes("about"))
			{
				aboutNav.classList.add("active");
			}
			if (currentURL.includes("join"))
			{
				joinNav.classList.add("active");
			}
			if (currentURL.includes("contact"))
			{
				contactNav.classList.add("active");
			}

		</script>