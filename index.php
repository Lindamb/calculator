<?php 
include('Classes/CalculatorAbstract.php');
include('Classes/CalculateClass.php');

/* KOLLAR OM ETT AJAX-REQUEST KÖRS */
if(empty($_SERVER['HTTP_X_REQUESTED_WITH'])) {
	include('Templates/form.php');
}
include('Controller/calcController.php');

if (isset($_POST['calc_result'])) {




	$objMathString = new calcController($_POST['calc_result']);
	$post = $_POST['calc_result'];

	$objMathString->getOperator($post);
	$objMathString->doMath($post);	
}




