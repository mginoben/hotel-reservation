<?php
	if(!isset($name)){
		$name = '';
	}
	if(!isset($contact)){
		$contact = '';
	}

	$months = array('January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December');
?>

<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Reservation</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="container">
		<!--NAV BAR-->
		<nav class="navbar navbar-expand-md navbar-dark p-2">
				<img src="img/icon.png" width="50" height="50">
				<a href="#" class="navbar-brand mx-2" id="brand">David's Hotel</a>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#toggleMobileMenu" aria-controls="toggleMobileMenu" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
				<div class="collapse navbar-collapse" id="toggleMobileMenu">
					<ul class="navbar-nav ms-auto text-center">
						<li>
							<a href="index.php" class="nav-link">Home</a>
						</li>
						<li>
							<a href="#" class="nav-link">Offers</a>
						</li>
						<li>
							<a href="reservation.php" class="nav-link">Reservation</a>
						</li>
						<li>
							<a href="#" class="nav-link">About</a>
						</li>
					</ul>
				</div>
		</nav>
		<div class="row py-4">
			<span class="fs-2 fw-bold text-center base-font">RESERVATION</span>
		</div>
		<form action="form-validation.php" method="post">
			<div class="row justify-content-center">
				<!-- NAME -->
				<div class="col-sm-12 col-lg-4 py-1 px-5">
    				<label for="name" class="form-label">Name</label>
				    <input type="text" class="form-control <?php if(isset($name_error)) { echo "border-danger border-1"; } ?>" id="name" name="name" placeholder="Enter Name" value="<?php echo htmlspecialchars($name) ?>" required>
				 	<?php if(isset($name_error)) {?>
				    	<div class="fs-6 fw-light fst-italic text-danger">
				    		<?php echo $name_error; ?>
				    	</div>
						<?php }?>
  					</div>
				<!-- CONTACT -->
	   			<div class="col-sm-12 col-lg-4 py-1 px-5">
					<label for="contact" class="form-label">Contact Number</label>
	    			<div class="input-group">
				        <span class="input-group-text" id="inputGroupPrepend">+63</span>
				        <input type="text" class="form-control" id="contact" name="contact" aria-describedby="inputGroupPrepend" required placeholder="#########" pattern="[0-9]{9}" value="<?php echo htmlspecialchars($contact) ?>">
			  	    </div>
				</div>
  			</div>
  			<!-- RESERVATION DATE -->
  			<div class="row justify-content-center mt-4">
  				<div class="col-sm-12 col-lg-8 px-5 text-start">
  					<span class="fs-4 base-font">RESERVATION DATE</span>
  					<hr class="my-1">
  				</div>
  			</div>
  			<div class="row justify-content-center" id="reservation_date">
  				<!-- FROM DATE -->
  				<div class="col-sm-12 col-md-4 py-2 px-5">
  					<label for="fdate" class="form-label">Check-in</label>
  					<div class="input-group" id="fdate">
	  					<select class="form-select <?php if(isset($fdate_error)) { echo "border-danger border-1"; } ?>" name="fmonth">
						    <?php foreach ($months as $month) { ?>
							<option value="<?php echo $month ?>" <?php if (isset($fmonth) && $fmonth == $month) { ?> selected=" <?php echo "true";
							} ?>"><?php echo $month ?></option>
							<?php } ?>
					    </select>
					    <input class="border px-2 <?php if(isset($fdate_error)) { echo "border-danger border-1"; } ?>" type="number" min="1" max="31" name="fday" placeholder=" dd" value="<?php echo htmlspecialchars($fday) ?>" required>
					    <input type="number" class="border px-2 rounded-end <?php if(isset($fdate_error)) { echo "border-danger border-1"; } ?>" min="2021" max="2050" name="fyear" placeholder=" yyyy" value="<?php echo htmlspecialchars($fyear) ?>" required>
					    <?php if(isset($fdate_error)) {?>
				    	<div class="fs-6 fw-light fst-italic text-danger">
				    		<?php echo $fdate_error; ?>
				    	</div>
						<?php }?>
  					</div>
  				</div>

  				<!-- TO DATE -->
  				<div class="col-sm-12 col-md-4 py-2 px-5">
  					<label for="tdate" class="form-label">Check-out</label>
  					<div class="input-group" id="tdate">
	  					<select class="form-select <?php if(isset($tdate_error)) { echo "border-danger border-1"; } ?>" name="tmonth">
						    <?php foreach ($months as $month) { ?>
							<option value="<?php echo $month ?>" <?php if (isset($tmonth) && $tmonth == $month) { ?> selected=" <?php echo "true";
							} ?>"><?php echo $month ?></option>
							<?php } ?>
					    </select>
					    <input class="border px-2 <?php if(isset($tdate_error)) { echo "border-danger border-1"; } ?>" type="number" min="1" max="31" name="tday" placeholder=" dd" value="<?php echo htmlspecialchars($tday) ?>" required>
					    <input type="number" class="border px-2 rounded-end <?php if(isset($tdate_error)) { echo "border-danger border-1"; } ?>" min="2021" max="2050" name="tyear" placeholder=" yyyy" value="<?php echo htmlspecialchars($tyear) ?>" required>
					    <?php if(isset($tdate_error)) {?>
				    	<div class="fs-6 fw-light fst-italic text-danger">
				    		<?php echo $tdate_error; ?>
				    	</div>
						<?php }?>
  					</div>
  				</div>
  			</div>
  			<!-- TRANSACTION DETAILS -->
  			<div class="row justify-content-center mt-4">
  				<div class="col-sm-12 col-lg-8 px-5 text-start">
  					<span class="fs-4 base-font">TRANSACTION DETAILS</span>
  					<hr class="my-1">
  				</div>
  			</div>

  			<div class="row justify-content-center mx-4">
  				<div class="col-sm-12 col-lg-2 py-2 px-4 mx-4">
  					<label for="room_type" class="form-label fw-bold">Room Type</label>
  					<div class="form-check" id="room_type">
	  					<input class="form-check-input" type="radio" name="room_type" value="suite" id="suite" checked>
	  					<label class="form-check-label" for="suite">
	    					Suite
	  					</label>
					</div>
					<div class="form-check" id="room_type">
	  					<input class="form-check-input" type="radio" name="room_type" value="deluxe" id="deluxe">
	  					<label class="form-check-label" for="deluxe">
	    					Deluxe
	  					</label>
					</div>
					<div class="form-check" id="room_type">
	  					<input class="form-check-input" type="radio" name="room_type" value="regular" id="regular">
	  					<label class="form-check-label" for="regular">
	    					Regular
	  					</label>
					</div>
  				</div>
  				<div class="col-sm-12 col-lg-2 py-2 px-4 mx-4">
  					<label for="room_capacity" class="form-label fw-bold">Room Capacity</label>
  					<div class="form-check" id="room_capacity">
	  					<input class="form-check-input" type="radio" name="room_capacity" value="family" id="family" checked>
	  					<label class="form-check-label" for="family">
	    					Family
	  					</label>
					</div>
					<div class="form-check" id="room_capacity">
	  					<input class="form-check-input" type="radio" name="room_capacity" value="double" id="double">
	  					<label class="form-check-label" for="double">
	    					Double
	  					</label>
					</div>
					<div class="form-check" id="room_capacity">
	  					<input class="form-check-input" type="radio" name="room_capacity" value="single" id="single">
	  					<label class="form-check-label" for="single">
	    					Single
	  					</label>
					</div>
  				</div>
  				<div class="col-sm-12 col-lg-2 py-2 px-4 mx-4">
  					<label for="payment_type" class="form-label fw-bold">Payment Type</label>
  					<div class="form-check" id="payment_type">
	  					<input class="form-check-input" type="radio" name="payment_type" value="cash" id="cash" checked>
	  					<label class="form-check-label" for="cash">
	    					Cash
	  					</label>
					</div>
					<div class="form-check" id="payment_type">
	  					<input class="form-check-input" type="radio" name="payment_type" value="cheque" id="cheque">
	  					<label class="form-check-label" for="cheque">
	    					Cheque
	  					</label>
					</div>
					<div class="form-check" id="payment_type">
	  					<input class="form-check-input" type="radio" name="payment_type" value="credit_card" id="credit_card">
	  					<label class="form-check-label" for="credit_card">
	    					Credit Card
	  					</label>
					</div>
  				</div>
  			</div>

  			<!-- BUTTONS -->
  			<div class="row justify-content-center">
  				<div class="col-sm-5 col-md-4 col-lg-3 d-flex justify-content-evenly p-4">
  					<button type="submit" name="submit" class="btn btn-primary" id="submit_btn">Submit</button>
  					<button type="reset" name="clear" class="btn btn-secondary">Clear Entry</button>
  				</div>
  			</div>
		</form>	
	</div>

	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
</body>
</html>