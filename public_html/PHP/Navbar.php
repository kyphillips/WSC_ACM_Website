		<script src="JS/Navbar.js" defer></script>
		<link rel="stylesheet" href="CSS/Navbar.css" />

		<nav class="navbar navbar-expand-lg navbar-light opaque">
			<div class="container-fluid">
				<a class="navbar-brand" href="#">
					<img src="Content/Active/Images/Logos/NavbarLogo.png" width="30" height="30" alt="">
				</a>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarNavDropdown">
					<ul class="navbar-nav ms-auto">
						<li class="nav-item">
							<a id="homeNav" class="nav-link active" aria-current="page" href="http://localhost/ACM_Website/public_html/Home.php">Home</a>
						</li>
						<li class="nav-item dropdown">
							<a id="eventsNav" class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
								Meetings & Events
							</a>
							<ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
								<li>
									<a class="dropdown-item" href="http://localhost/ACM_Website/public_html/UpcomingEvents.php">Upcoming</a>
								</li>
								<li>
									<a class="dropdown-item" href="http://localhost/ACM_Website/public_html/PastEvents.php">Past</a>
								</li>
							</ul>
						</li>
						<li class="nav-item">
							<a id="aboutNav" class="nav-link" href="http://localhost/ACM_Website/public_html/AboutUs.php">About Us</a>
						</li>
						<li class="nav-item">
							<a id="contactNav" class="nav-link" href="http://localhost/ACM_Website/public_html/ContactUs.php">Contact Us</a>
						</li>
						<li class="nav-item">
							<a id="joinNav" class="nav-link" href="#"  onclick="#">Join Us</a>
						</li>
						
					</ul>
				</div>
			</div>
		</nav>
		

