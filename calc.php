<?php

	//calc.php
	
	function divide($x, $y){ // jagamine
		
		$answer = $x / $y;
		
		return $answer;
		
	}
	
	function multiply($x, $y){ // korrutamine
		
		$answer = $x * $y;
		
		return $answer;
		
	}
	
	$number_one = 0;
	
	$number_two = 0;
	
	$result = 0;
	
	$result = divide(2,5);
	
	var_dump($result);
	
	$result = multiply(2,5);
	
	var_dump($result);
	
	
	$multiply_result = $divide_result = 0;
	
	if(isset($_GET["operator"])){
		
		echo $_GET["operator"];
		
		if($_GET["operator"] == "multiply"){
			
			$multiply_result = multiply($_GET["number_one"], $_GET["number_two"]);

			
		}elseif($_GET["operator"] == "divide"){
			
			$divide_result = divide($_GET["number_one"], $_GET["number_two"]);

			
		}
		
	}
	
	
?>

<h1> Korruta </h1>
<form>
	<input type="hidden" name="operator" value="multiply">
	<input name="number_one"> X <input name="number_two">
	= <?php echo $multiply_result;?>
	<input type="submit">
</form>

<h1> Jaga </h1>
<form>
	<input type="hidden" name="operator" value="divide">
	<input name="number_one"> / <input name="number_two">
	= <?=$divide_result;?>
	<input type="submit">
</form>