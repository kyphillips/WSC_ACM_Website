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
		</style>
