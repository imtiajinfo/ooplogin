<?php include 'class.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>OOP Calculator</title>
</head>
<body>
	<form action="" method="POST">
		<input type="number" name="num1" placeholder="Input First Number"><br><br>
		<select name="sign">
			<option value="add">+</option>
			<option value="subtraction">-</option>
			<option value="multiplication">*</option>
			<option value="division">/</option>
		</select><br><br>
		<input type="number" name="num2" placeholder="Input Second Number"><br><br>
		<button type="submit" name="submit">Calculate</button>
	</form>
</body>
</html>
<?php 

if (isset($_POST['submit'])) {
	$num1 = $_POST['num1'];
	$sign = $_POST['sign'];
	$num2 = $_POST['num2'];

	$data = new Calc($num1, $sign, $num2);
	echo $data->Calculate();
}

 ?>