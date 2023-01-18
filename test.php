<?php 

	$months = array('January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December');
	$fmonth = 'March';
	echo array_search('February', $months);
?>

<form>
	<select>
		<?php foreach ($months as $month) { ?>
			<option value="<?php echo $month ?>" <?php if (isset($fmonth) && $fmonth == $month) { ?> selected=" <?php echo "true";
			} ?>"><?php echo $month ?></option>
		<?php } ?>
		
	</select>
</form>