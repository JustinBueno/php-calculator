<!DOCTYPE html>
<html> 
<head>
<meta  charset="UTF-8">
<title>Title of the document</title>
</head>


<body>

<form method="GET">
<input type="text" name="person">
<button>SUBMIT</button> 	
</form>

<?php
	
	//Server Side code | server has to be running for php to work
	
	$name  = "$_GET['person']";
	echo $name." is goat";

	echo "Hello World ";
	print "My name is Trunks"; 
	print 2018;  
	echo 10+5;
	//strlen counts string length 
	echo strlen("Super Saiyan");
	//str_word_count counts how many words
	echo str_word_count("hi");
	//strrev reverses the whats inside the string 
	echo strrev("hi");
	//str-pos calculates the position of a word counter starts at [0] 
	echo str_pos("hi trunks", "hi");
	// str_replace finds the word and replaces it in the string 
	echo str_replace("trunks", "gohan", "ss2 trunks");
	
	// if you need to find a function to do something just google it 

	//Variable types 
	//string 
	$name = 'coding is money';
	$name = "coding is money";

	//Integer
	$name = 13;

	//Float
	$name = 3.14;

	//Boolean | conditional testing 
	true = 1
	false = 0 

	//Array | useful to connect variables to one object
	$names = array("Goku", "Gohan", "Trunks", "Piccolo");
	echo $names['2']

	//Arithmetic Operators
	// spits out the remainder in this case it would print out 3
	echo 8%5
	// ** is for exponents so 5 to the power of 3 
	echo 5**3

	//Assignment Operators 
	$x =100;
	$x = $x + 20; 
	$x += 20;

	//Comparison Operators 
	$x = 5;
	$y = 10;
	// = setting a variable | == is equal to alternate way <>
	// === is equal to and the same data type 
	// != means if it's not equal to 

	if($x === $y) {
		echo "True!";
	} 
	else {
		echo "False!";
	}

	//Increment & Decrement Operators
	$x = 10;
	echo ++$x; 
	$y = 10;
	echo --$y;
	// placement matters if you put it before it will increment then echo
	// if you put if after it will echo out then increment 

	//Logical Operators 
	// || / or : if either conditions are true
	// and / && : both conditions have to be true
	// xor : one of the conditions has to be true but only one condition 
	$x = 10;
	$y = 20;

	if ($x == $y or 1 == 1) {
		echo "True";
	} 

	//Various Conditional Statements 
	$x = 2;

	// if and else statements
	// example for web dev if someone is logged in display a picture

	if ($x == 1){
		echo "Trunks is goat ";
	} 
	elseif($x == 2){
		echo "Gohan is goat";
	} 
	elseif($x == 3){
		echo "Gohan is goat";
	} 
	elseif($x == 4){
		echo "Gohan is goat";
	} 
	else {
		echo "Goku is goat";
	}

	//Switch Statements 
	// is good for checking answers rather than conditions
	// if and else are better for conditions 
	// you need to add a break statement after every case last statement 
	// default is like else 
	$x = 4;

	switch ($x) {
		case 1: 
			echo "The awnser is 1";
		break;
		case 2: 
			echo "The awnser is 2";
		break;
		case 3: 
			echo "The awnser is 3";
		break;
		case 4: 
			echo "The awnser is 4";
		break;
		default: 
		echo "There is no answer";
	}

	
?>	
</body>

</html>
