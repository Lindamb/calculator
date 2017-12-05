<?php 
$string = $_POST['calc_result'];

if(!(strpos($string, "+")) == false) {
	$operator = "+";
	$numberOne = $string[count($operator)-1]; 
	$numberTwo = $string[count($operator)+1]; 

	} elseif (!(strpos($string, "-")) == false) {
		$operator = "-";
		$numberOne = $string[count($operator)-1]; 
		$numberTwo = $string[count($operator)+1]; 

	} elseif (!(strpos($string, "/")) == false) {
		$operator = "/";
		$numberOne = $string[count($operator)-1]; 
		$numberTwo = $string[count($operator)+1]; 
	
	} elseif (!(strpos($string, "x")) == false) {
		$operator = "*";
		$numberOne = $string[count($operator)-1]; 
		$numberTwo = $string[count($operator)+1]; 
}

$objCalc = new Calculate;

if($operator == "+") {
    
    $objCalc->addNumbers($numberOne, $numberTwo);
		} elseif ($operator == "-") {
            $objCalc->substractNumbers($numberOne, $numberTwo);
		} elseif ($operator == "*") {
            $objCalc->multiplyNumbers($numberOne, $numberTwo);
		} elseif  ($operator == "/") {
            $objCalc->divideNumbers($numberOne, $numberTwo);
		} elseif ($operator == "%") {
            $objCalc->getPercentOfNumber($numberOne, $numberTwo);
}

 
