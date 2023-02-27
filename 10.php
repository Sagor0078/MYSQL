<!DOCTYPE html>
<html>
<head>
	<title>Electricity Bill Calculator</title>
</head>
<body>
	<h2>Electricity Bill Calculator</h2>
	<form method="post">
		<label for="units">Enter units consumed:</label>
		<input type="number" name="units" id="units" required>
		<input type="submit" name="submit" value="Calculate">
	</form>
	<?php
		if(isset($_POST['submit'])) {
			$units = $_POST['units'];
			$total_bill = 0;
			if($units <= 50) {
				$total_bill = $units * 3.50;
			} else if($units <= 100) {
				$total_bill = 50 * 3.50 + ($units - 50) * 4.00;
			} else if($units <= 200) {
				$total_bill = 50 * 3.50 + 50 * 4.00 + ($units - 100) * 5.20;
			} else {
				$total_bill = 50 * 3.50 + 50 * 4.00 + 100 * 5.20 + ($units - 250) * 6.50;
			}
			echo "<p>Total bill for $units units: Taka. $total_bill</p>";
		}
	?>
</body>
</html>
