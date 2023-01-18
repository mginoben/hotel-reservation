<?php	

	$months = array('January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December');

	if(isset($_POST['submit'])) {
		$name = strtoupper($_POST['name']);
		$contact = $_POST['contact'];

		$fmonth = $_POST['fmonth'];
		$fday = $_POST['fday'];
		$fyear = $_POST['fyear'];

		$tmonth = $_POST['tmonth'];
		$tday = $_POST['tday'];
		$tyear = $_POST['tyear'];

		if(isset($_POST['room_type'])){
			$room_type = $_POST['room_type'];
		}
		if(isset($_POST['room_capacity'])){
			$room_capacity = $_POST['room_capacity'];
		}
		if(isset($_POST['payment_type'])){
			$payment_type = $_POST['payment_type'];
		}

//ERRORS
		//NAME ERROR
		if (strlen($name) < 4) {
			$name_error = "Name must be atleast 4 characters";
		}
		elseif (strlen($name) > 30) {
			$name_error = "Name must not exceed 30 characters";
		}
		elseif (preg_match('/[0-9]/', $name)) {
			$name_error = "Name must not have any number";
		}

		//DATE ERROR
		//FROM
		if ($fmonth == 'February' && $fday > 28){
			$fdate_error = "February has only 28 days";
			echo "error";
		}
		elseif (($fmonth == 'April' || $fmonth == 'June' || $fmonth == 'September' || $fmonth == 'November') && $fday > 30){
			$fdate_error = $fmonth . " has only 30 days";
		}
		elseif ($fyear > $tyear){
			$fdate_error = "Invalid year input";
		}
		elseif((array_search($fmonth, $months) > array_search($tmonth, $months)) && $fyear == $tyear){
			$fdate_error = "Invalid month input";
		}

		//TO
		if ($tmonth == 'February' && $tday > 28){
			$tdate_error = "February has only 28 days";
		}
		elseif (($tmonth == 'April' || $tmonth == 'June' || $tmonth == 'September' || $tmonth == 'November') && $tday > 30){
			$tdate_error = $tmonth . " has only 30 days";
		}
		elseif(($fmonth == $tmonth && $fyear == $tyear) && $fday == $tday){
			$tdate_error = "Minimum of one day reservation";
		}
		elseif(($fmonth == $tmonth && $fyear == $tyear) && $fday > $tday){
			$tdate_error = "Invalid day input";
		}

		//TRANSACTION ERROR
		// if(!isset($_POST['room_type'])){
		// 	$transaction_error = "Please select your room type";
		// }
		// elseif (!isset($_POST['room_capacity'])){
		// 	$transaction_error = "Please select your room capacity";
		// }
		// elseif (!isset($_POST['payment_type'])){
		// 	$transaction_error = "Please select your payment type";
		// }
	}

	if(isset($_POST['clear'])){
		session_unset();
		header('Location: reservation.php');
		exit();
	}

	if(isset($name_error) || isset($contact_error) || isset($tdate_error) || isset($transaction_error) || isset($fdate_error)){
		include('reservation.php');
	}
	else{
		echo "Success";
	}
	


	

?>