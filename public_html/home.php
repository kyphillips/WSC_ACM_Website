<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>ACM Landing Page</title>

		<!--misc.css contains miscelanious css that doesn't fit into text, Content, images, etc'-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
        <link rel="stylesheet" href="Resources/CSS/shared.css" />
		<link rel="stylesheet" href="Resources/CSS/misc.css">
		<link rel="stylesheet" href="Resources/CSS/home.css" />
        

        

		<!-- Bootstrap CSS -->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />

		<!-- Option 1: Bootstrap Bundle with Popper -->
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>



	</head>

	<body>

		<?php
			include 'Resources/Shared/PHP/Navbar.php';
		?>
		
		
		<div class="row justify-content-center col-12 ">

			<div class="col-lg-8 col-md-8 col-sm-12 col-12">
				<div class="LightBlueRounded">
                    <div class="col-12 header-main  ">
                        What we've been up to...
                    </div>

                    <div class="row my-3">
                        <div class="col-lg-4 col-md-4 col-12 order-1">
                            <div class="zigzag-image">
                                <img class="zigzag-image" src="Resources\Landingpage\Content\Images\CompProgram.jpg" />
                            </div>
                        </div>

                        <div class="col-lg-8 col-md-8 col-12 order-2 align-self-center justify-content-center ">
                            <div class="zigzag-content">
                                In Feburary, for the first time in ACM we had some members compete in the Hash Code programming competition. While the team wasnt able to finish
						within the time, it was still a great experience and they would like to do it again in the future.
                            </div>
                        </div>
                    </div>

                    <div class="row my-4  ">
                        <div class="col-lg-4 col-md-4 col-12 order-lg-2 order-md-2 order-1">
                            <div class="zigzag-image">
                                <img class="zigzag-image" src="Resources\Landingpage\Content\Images\Bowling2022.jpg" />
                            </div>
                        </div>

                        <div class="col-lg-8 col-md-8 col-12 order-lg-1 order-md-1 order-2 align-self-center justify-content-center">
                            <div class="zigzag-content">
                                Like every year, ACM held their annual bowling night before midterm break. Members came and enjoyed some fun bowling
								for that day's meeting down at WildCat Lanes in Wayne.
                            </div>
                        </div>
                    </div>

                    <div class="row my-3  ">
                        <div class="col-lg-4 col-md-4 col-12 order-1">
                            <div class="zigzag-image">
                                <img class="zigzag-image" src="Resources\Landingpage\Content\Images\audience.jpg" />
                            </div>
                        </div>

                        <div class="col-lg-8 col-md-8 col-12 order-2 align-self-center justify-content-center">
                            <div class="zigzag-content">
                                In the Fall 2021 semester, we had some really great guest speakers for a few club meetings. Even though the first half of the
						Spring semester has been pretty relaxed, we have couple exciting guest speakers to look forward to.
                            </div>
                        </div>
                    </div>

				</div>
			</div>
			

			<div class="col-lg-3 col-md-3 col-sm-12 col-12">
				<div class="col-12 header-main text-center">
					Stay in the know!
				</div>

				<div class="DarkBlueRounded">
					<a class="sidebar-link" href="#" onclick="overlayOn(0);return false;">
						<div class="row g-0 sidebar-event-container">
							<div class="col-lg-6 col-md-6 col-12 order-1 justify-content-center align-self-center">

								<div class="sidebar-link">
									<div class="sidebar-link-text">
										Click Here For More Info
									</div>
								</div>

								<div class="sidebar-image">
									<img class="sidebar-image " src="Resources\Landingpage\Content\Images\Bowling2022.jpg" />
								</div>
							</div>

							<div class="col-lg-6 col-md-6 col-12 order-2">
								<div class="sidebar-title">
									ACM Meeting
								</div>

								<div class="sidebar-content">
									03/24/22
									<br />
									5:00pm
									<br />
									Gardner Hall
									<br />
									Room 108
								</div>
							</div>
						</div>
					</a>
					
					<a class="sidebar-link" href="#" onclick="overlayOn(1);return false;">
						<div class="row g-0 sidebar-event-container">
							<div class="col-lg-6 col-md-6 col-12 order-1 justify-content-center align-self-center">

								<div class="sidebar-link">
									<div class="sidebar-link-text">
										Click Here For More Info
									</div>
								</div>

								<div class="sidebar-image">
									<img class="sidebar-image " src="Resources\Landingpage\Content\Images\Bowling2022.jpg" />
								</div>
							</div>

							<div class="col-lg-6 col-md-6 col-12 order-2">
								<div class="sidebar-title">
									ACM Meeting
								</div>

								<div class="sidebar-content">
									03/24/22
									<br />
									5:00pm
									<br />
									Gardner Hall
									<br />
									Room 108
								</div>
							</div>
						</div>
					</a>

					<a class="sidebar-link" href="#" onclick="overlayOn(2);return false;">
						<div class="row g-0 sidebar-event-container">
							<div class="col-lg-6 col-md-6 col-12 order-1 justify-content-center align-self-center">

								<div class="sidebar-link">
									<div class="sidebar-link-text">
										Click Here For More Info
									</div>
								</div>

								<div class="sidebar-image">
									<img class="sidebar-image " src="Resources\Landingpage\Content\Images\Bowling2022.jpg" />
								</div>
							</div>

							<div class="col-lg-6 col-md-6 col-12 order-2">
								<div class="sidebar-title">
									ACM Meeting
								</div>

								<div class="sidebar-content">
									03/24/22
									<br />
									5:00pm
									<br />
									Gardner Hall
									<br />
									Room 108
								</div>
							</div>
						</div>
					</a>

					<a class="sidebar-link" href="#" onclick="overlayOn(3);return false;">
						<div class="row g-0 sidebar-event-container">
							<div class="col-lg-6 col-md-6 col-12 order-1 justify-content-center align-self-center">

								<div class="sidebar-link">
									<div class="sidebar-link-text">
										Click Here For More Info
									</div>
								</div>

								<div class="sidebar-image">
									<img class="sidebar-image " src="Resources\Landingpage\Content\Images\Bowling2022.jpg" />
								</div>
							</div>

							<div class="col-lg-6 col-md-6 col-12 order-2">
								<div class="sidebar-title">
									ACM Meeting
								</div>

								<div class="sidebar-content">
									03/24/22
									<br />
									5:00pm
									<br />
									Gardner Hall
									<br />
									Room 108
								</div>
							</div>
						</div>
					</a>

					<a class="sidebar-link" href="#" onclick="overlayOn(4);return false;">
						<div class="row g-0 sidebar-event-container">
							<div class="col-lg-6 col-md-6 col-12 order-1 justify-content-center align-self-center">

								<div class="sidebar-link">
									<div class="sidebar-link-text">
										Click Here For More Info
									</div>
								</div>

								<div class="sidebar-image">
									<img class="sidebar-image " src="Resources\Landingpage\Content\Images\Bowling2022.jpg" />
								</div>
							</div>

							<div class="col-lg-6 col-md-6 col-12 order-2">
								<div class="sidebar-title">
									ACM Meeting
								</div>

								<div class="sidebar-content">
									03/24/22
									<br />
									5:00pm
									<br />
									Gardner Hall
									<br />
									Room 108
								</div>
							</div>
						</div>
					</a>
				</div>
			</div>
	</div>

		<script>
			const event01 = { title: "ACM Meeting 01", timeDate: "03/24/22 5:00pm", location: "Gardner Hall Room 108", content: "In the Fall 2021 semester, we had some really great guest speakers for a few club meetings. Even though the first half of theSpring semester has been pretty relaxed, we have couple exciting guest speakers to look forward to."};
			const event02 = { title: "ACM Meeting 02", timeDate: "03/24/22 5:00pm", location: "Gardner Hall Room 108", content: "In the Fall 2021 semester, we had some really great guest speakers for a few club meetings. Even though the first half of theSpring semester has been pretty relaxed, we have couple exciting guest speakers to look forward to."};
			const event03 = { title: "ACM Meeting 03", timeDate: "03/24/22 5:00pm", location: "Gardner Hall Room 108", content: "In the Fall 2021 semester, we had some really great guest speakers for a few club meetings. Even though the first half of theSpring semester has been pretty relaxed, we have couple exciting guest speakers to look forward to."};
			const event04 = { title: "ACM Meeting 04", timeDate: "03/24/22 5:00pm", location: "Gardner Hall Room 108", content: "In the Fall 2021 semester, we had some really great guest speakers for a few club meetings. Even though the first half of theSpring semester has been pretty relaxed, we have couple exciting guest speakers to look forward to."};
			const event05 = { title: "ACM Meeting 05", timeDate: "03/24/22 5:00pm", location: "Gardner Hall Room 108", content: "In the Fall 2021 semester, we had some really great guest speakers for a few club meetings. Even though the first half of theSpring semester has been pretty relaxed, we have couple exciting guest speakers to look forward to."};

			const events = [event01, event02, event03, event04, event05];

			

			function overlayOn(eventIndex)
			{
				var divTitle = document.getElementById("overlayTitle");
				var divTimeDate = document.getElementById("overlayTimeDate");
				var divLocation = document.getElementById("overlayLocation");
				var divContent = document.getElementById("overlayContent");

				var event = events[eventIndex];
				divTitle.innerText = event.title;
				divTimeDate.innerText  = event.timeDate;
				divLocation.innerText  = event.location;
				divContent.innerText  = event.content;
				document.getElementById("eventOverlay").style.display = "block";
			}

			function overlayOff()
			{
				document.getElementById("eventOverlay").style.display = "none";
			}
		</script>

		<div id="eventOverlay" class="popup-overlay" onclick="overlayOff()">
			<div class="col-lg-6 col-md-6 col-sm-6 col-10 popup-overlay-container">
				<div class="overlay-image ">
					<img id="overlayImg" class="overlay-image " src="Resources\Landingpage\Content\Images\Bowling2022.jpg" />
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

	</body>

</html>

