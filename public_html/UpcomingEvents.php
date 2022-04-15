<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>ACM Landing Page</title>

		<!--misc.css contains miscelanious css that doesn't fit into text, Content, images, etc'-->
        <link rel="stylesheet" href="Resources/CSS/shared.css" />
        <link rel="stylesheet" href="Resources/CSS/misc.css">
		<link rel="stylesheet" href="Resources/CSS/upcomingevents.css" />
       

		 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

		<!-- Bootstrap CSS -->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />

		<!-- Option 1: Bootstrap Bundle with Popper -->
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

		<script src="Resources/JS/UpcomingEvents.js" defer></script>
	</head>

	

	<body>

		<?php
			include 'Resources/Shared/PHP/Navbar.php';
        ?>
		
		<div class="row justify-content-center">
			<div class="col-md-11 col-sm-10 col-11 ">

				<div id="mainEventRow" class="row">
					
				</div>

				<div id ="eventsListRow" class="row">

				</div>

			</div>
		</div>

		<div id="eventOverlay" class="popup-overlay" onclick="overlayOff()">
			<div class="col-lg-6 col-md-6 col-sm-6 col-10 popup-overlay-container">
				<div class="overlay-image ">
					<img id="overlayImg" class="overlay-image " src= "Resources\UpcomingEvents\Content\Images\projectnight.jpg" />
				</div>

				<div id="overlayTitle" class="overlay-title">
					place holder
				</div>

				<div id="overlayTimeDate" class="overlay-info">
					place holder
				</div>

				<div id="overlayLocation" class="overlay-info">	
					place holder
				</div>
			
				<div id="overlayContent" class="overlay-content">
					place holder place holder place holder place holder place holder place holder place holder place holder place holder
					place holder place holder place holder place holder place holder place holder place holder place holder
				</div>

				<br />
			</div>
		</div>


		<template id="mainEventTemplate">
			<div class="col-lg-12 col-md-12 col-12 event-container">
                <a class="sidebar-link" href="#" onclick="overlayOn(this);return false;">
                    <div class="event-main-image">
                        <img id="mainEventImg" class="event-image" src="Resources/UpcomingEvents/Content/Images/projectnight.jpg" />
                        <div id="bigDate" class="event-main-overlay-date long">
                            April 14th
                        </div>
                        <div class="event-main-overlay-content">
                            <div class="event-text-container">
                                <div id="mainEventTitle" class="event-title">
                                    Project Night
                                </div>
                                <div id="mainEventDate" class="event-info">
                                    April 14th 2022 @5pm
                                </div>
                                <div id="mainEventLocation" class="event-info">
                                    Gardner Hall RM 115
                                </div>

                                <div id="mainEventContentLong" class="event-content long">
                                    Throughout the school year, ACM has students get involve with multiple different projects for them to tinker and explore their interests with technology. (This very website is one of those projects!)
									There is a wide range of projects for the students to explore, we frequently have meetings for students to get in their groups and work on the project they want. We call them project nights. 
                                </div>

                                <div id="mainEventContent" class="event-content short">
                                    A night to get into our project groups and get some work done on our projects that we work on through out the year. 
                                </div>
                            </div>
                        </div>

                        <div class="sidebar-link">
                            <div class="sidebar-link-text">
                                Click Here For More Info
                            </div>
                        </div>
                    </div>
                </a>
            </div>
		</template>

		<template id="listEventTemplate">
                <div class="col-lg-4 col-md-4 col-12 event-container">
                    <a class="sidebar-link" href="#" onclick="overlayOn(this);return false;">
                        <div class="event-image">
                            <img id="eventImg" class="event-image" src="Resources/UpcomingEvents/Content/Images/torchceremony.jpg" />

                            <div class="event-overlay">
                                <div class="event-text-container">
                                    <div id="eventTitle" class="event-title">
                                        Project Night
                                    </div>
                                    <div id="eventTime" class="event-info">
                                        April 14th @5pm, 2022
                                    </div>
                                    <div id="eventLocation" class="event-info">
                                        Gardner Hall RM 115
                                    </div>

                                    <div id="eventContent" class="event-content">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam vel risus massa. Nulla efficitur lorem at ipsum condimentum.
                                    </div>
                                </div>
                            </div>

                            <div class="sidebar-link">
                                <div class="sidebar-link-text">
                                    Click Here For More Info
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
			
		</template>
		
</body>

</html>


