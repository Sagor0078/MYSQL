<!DOCTYPE html>
<html>
<head>
	<title>Simple Calculator</title>
</head>
<body>
	<h2>Simple Calculator</h2>
	<form method="post">
		<label for="num1">Enter first number:</label>
		<input type="number" name="num1" id="num1" required>
		<br>
		<label for="num2">Enter second number:</label>
		<input type="number" name="num2" id="num2" required>
		<br>
		<input type="submit" name="add" value="Addition">
		<input type="submit" name="sub" value="Subtraction">
		<input type="submit" name="mul" value="Multiplication">
		<input type="submit" name="div" value="Division">
	</form>
	<?php
		if(isset($_POST['add'])) {
			$num1 = $_POST['num1'];
			$num2 = $_POST['num2'];
			$result = $num1 + $num2;
			echo "<p>Result of addition: $result</p>";
		} else if(isset($_POST['sub'])) {
			$num1 = $_POST['num1'];
			$num2 = $_POST['num2'];
			$result = $num1 - $num2;
			echo "<p>Result of subtraction: $result</p>";
		} else if(isset($_POST['mul'])) {
			$num1 = $_POST['num1'];
			$num2 = $_POST['num2'];
			$result = $num1 * $num2;
			echo "<p>Result of multiplication: $result</p>";
		} else if(isset($_POST['div'])) {
			$num1 = $_POST['num1'];
			$num2 = $_POST['num2'];
			if($num2 == 0) {
				echo "<p>Cannot divide by zero</p>";
			} else {
				$result = $num1 / $num2;
				echo "<p>Result of division: $result</p>";
			}
		}
	?>
</body>
</html>
