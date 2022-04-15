<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
        
        <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
        <meta http-equiv="Pragma" content="no-cache" />
        <meta http-equiv="Expires" content="0" />

		<title>WSC/ACM - Contact Us</title>

        <link rel="stylesheet" href="CSS/Shared.css" />
		<link rel="stylesheet" href="CSS/ContactUs.css">

		<!-- Bootstrap CSS -->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />

		<!-- Option 1: Bootstrap Bundle with Popper -->
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
	</head>

	<body>

		<?php
			include 'PHP/Navbar.php';
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
										Steven Hornberg
									</div>

									<div class="contact-image">
										<img class="contact-image" src="Content/Active/Images/Officers/President.jpg" />
									</div>

									<div class="contact-email">
										sthorn02@wsc.edu
									</div>
								</div>
							</div>

							<div class="col-lg-5 col-md-5 col-10">
								<div class="contact-container">
									<div class="contact-title">
										Vice President
									</div>

									<div class="contact-name">
										Kota Gullicksen
									</div>

									<div class="contact-image">
                                        <img class="contact-image" src="Content/Active/Images/Officers/VicePresident.png" />
									</div>

									<div class="contact-email">
										kogull01@wsc.edu
									</div>
								</div>
							</div>
						</div>

						<div class="row g-1 justify-content-center">
							<div class="col-lg-5 col-md-5 col-10">
								<div class="contact-container">
									<div class="contact-title">
										Secretary
									</div>

									<div class="contact-name">
										Kyla Phillips
									</div>

									<div class="contact-image">
                                        <img class="contact-image" src="Content/Active/Images/Officers/Secretary.jpg" />
									</div>

									<div class="contact-email">
										kyphil02@wsc.edu
									</div>
								</div>
							</div>

							<div class="col-lg-5 col-md-5 col-10">
								<div class="contact-container">
									<div class="contact-title">
										Treasurer 
									</div>

									<div class="contact-name">
										Thomas Marxsen
									</div>

									<div class="contact-image">
                                        <img class="contact-image" src="Content/Active/Images/Officers/Treasurer.jpg" />
									</div>

									<div class="contact-email">
										thmarx01@wsc.edu
									</div>
								</div>
							</div>
						</div>

						<div class="row g-1 justify-content-center">
							<div class="col-lg-5 col-md-5 col-10">
								<div class="contact-container">
									<div class="contact-title">
										Recruitment Officer
									</div>

									<div class="contact-name">
										Open Position
									</div>

									<div class="contact-image">
                                        <img class="contact-image" src="Content/Active/Images/Officers/no-pic.png" />
									</div>

									<div class="contact-email">
										example@wsc.edu
									</div>
								</div>
							</div>

							<div class="col-lg-5 col-md-5 col-10">
								<div class="contact-container">
									<div class="contact-title">
										Advisor
									</div>

									<div class="contact-name">
										Debbie Johnson
									</div>

									<div class="contact-image">
                                        <img class="contact-image" src="Content/Active/Images/Officers/Advisor.jpg" />
									</div>

									<div class="contact-email">
										dejohn02@wsc.edu
									</div>
								</div>
							</div>
						</div>

				</div>
			</div>

        <?php
        if(isset($_POST['submit'])){
            $to = "brsmit09@wsc.edu"; // this is your Email address
            $from = $_POST['email']; // this is the sender's Email address
            $name = $_POST['name'];
            $subject = "Form submission From ACM Website";
            $subject2 = "Copy of your form submission";
            $message = $first_name . " " . $last_name . " wrote the following:" . "\n\n" . $_POST['message'];
            $message2 = "Here is a copy of your message " . $first_name . "\n\n" . $_POST['message'];
            $headers = "From:" . $from;
            $headers2 = "From:" . $to;
            mail($to,$subject,$message,$headers);
            mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
            echo "Mail Sent. Thank you " . $first_name . ", we will contact you shortly.";
            // You can also use header('Location: thank_you.php'); to redirect to another page.
        }
        ?>

			<div class="col-lg-5 col-md-5 col-sm-12 col-12">
				<div class="LightBlueRounded h-100">
					<div class="header-main blue">Get in Touch!</div>
					<div class="header-secondary">We'd love to hear from you!</div>
                    <form method="post">
                        <div class="mb-4">

                            <label for="email" class="form-label">Email address</label>
                            <input type="email" class="form-control" id="email" aria-describedby="emailHelp" />
                        </div>
                        <div class="row">
                            <div class="mb-4 col-6">
                                <label for="Name" class="form-label">Name</label>
                                <input type="text" class="form-control" id="Name" />
                            </div>

                            <div class="mb-4 col-6">
                                <label for="Phone" class="form-label">Phone</label>
                                <input type="text" class="form-control" id="Phone" />
                            </div>
                        </div>

                        <div class="mb-4">
                            <label for="message" class="form-label">Message</label>
                            <input type="text" class="form-control fill-field" id="message" />
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

