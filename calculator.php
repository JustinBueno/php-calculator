<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Php Calculator</title>
</head>

<body>


<form>
	<input type="text" name="num1" placeholder = "Number 1">	
	<input type="text" name="num2" placeholder = "Number 2">
	<select name="operator">
		<option>None</option>
		<option>Add</option>
		<option>Subtract</option>
		<option>Multiply</option>
		<option>Divide</option>
	</select>
	<br>
	<button type="submit" name="submit" value="submit">Calculate</button>
</form>
<p>The answer is: </p>

<?php

	// isset : which means if this has been set already 
	// Get method you can see the info in the url 
	// post metho you can't see it in the url but it's still there 
	if(isset($_GET['sumbit'])){
		// gets the diffrent answers from the url itself 
		$result1 = $_GET['num1'];
		$result2 = $_GET['num2'];
		$operator = $_GET['num3'];

		//depending on whats chosen for the operator the switch statement 
		//will have to do something with the information that was typed in 
		
		switch($operator) {
			case "None":
			echo "you need to select a method"
			break;
			case "Add"
			echo $result1 + $result2;
			break;
			case "Subtract":
			echo $result1 - $result2;
			break;
			case "Multiply":
			echo $result1 * $result2;
			break;
			case "Divide":
			echo $result1 / $result2;
			break;

		}
	}

?>

	
</body>
</html>
