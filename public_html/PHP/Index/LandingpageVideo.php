<div class="showcase">

	<div class="video-container">
		<video src="Content/Active/Videos/IndexPage/LandingVideo.mp4" autoplay muted loop></video>
	</div>

	<div class="VideoNavBar">
		
		<nav class="navbar navbar-expand-lg navbar-dark shadow-5-strong ">

			<div class="container-fluid">
		
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
		
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
			
					<ul class="navbar-nav ms-auto">
						
						<li class="nav-item">
							<a id="homeNav" class="nav-link" aria-current="page" href="http://localhost/ACM_Website/public_html/home.php#">Home</a>
						</li>

						<li class="nav-item dropdown">
							
							<a id="eventsNav" class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">Meetings & Events</a>
							
							<ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
								
								<li>
									<a class="dropdown-item" href="http://localhost/ACM_Website/public_html/upcomingevents.php">Upcoming</a>
								</li>

								<li>
									<a class="dropdown-item" href="http://localhost/ACM_Website/public_html/passedevents.php">Past</a>
								</li>

							</ul>

						</li>

						<li class="nav-item">
							<a id="aboutNav" class="nav-link" href="#">About Us</a>
						</li>
						
						<li class="nav-item">
							<a id="contactNav" class="nav-link" href="http://localhost/ACM_Website/public_html/contactus.php">Contact Us</a>
						</li>

						<li class="nav-item">
							<a id="joinNav" class="nav-link" href="#">Join Us</a>
						</li>
						
					</ul>

				</div>

			</div>

		</nav> 

	</div>

	<div class ="VideoContentContainerFull">
		<div class ="VideoContentContainerHalfCenter">
			<div class="ACMLogoContainer">
                <img class="FillContainer" src="Content/Active/Images/Logos/DiamondLogoNoBG.png" />
			</div>
					
			<div class="VideoTextContainerCenter">
				<h3 class = "Center White VW">
					Wayne State College
				</h3>

				<h8 class = "Center White VW">
					Where All WSC students are welcome!
				</h8>
			</div>
		</div>
	</div>

	<div class="VideoContentFooter">
		<div class="VideoContentContainerHalfCenter">
			<div>
			<h7 class ="VW">Why Join ACM?</h7>
			</div>
			<div class="ArrowIconContainer">
                <img class="FillContainer bounce" src="Content/Active/Images/Icons/DownArrow.png" />
			</div>
		</div>	
	</div>

</div>

<style>
		.nav-item 
			{
			margin-right:3vw;
			font-size:6vw;
			}
			.active 
			{
				text-decoration: underline;
				font-weight:bold;
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
			}
</style>