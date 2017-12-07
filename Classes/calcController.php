<?php 
class calcController {
	
	private $operator;
	protected $post; 
	
	public function __construct($post) {
		$this->post = $post;
	}
	public function getOperator($post) {
		$this->string = $post;
	    if(!(strpos($this->string, "--")) == false) {
			$this->operator = "--";
			list($this->numberOne, $this->numberTwo) = explode($this->operator, $this->string); 
			$this->operator;
			if($this->operator = "--") {
				$this->operator = "+";
			}
		} elseif(!(strpos($this->string, "-+")) == false) {
			$this->operator = "-+";
			list($this->numberOne, $this->numberTwo) = explode($this->operator, $this->string); 
			$this->operator;
			$this->numberTwo;
			if($this->operator = "-+") {
				$this->operator = "+";
			}
		} elseif (!(strpos($this->string, "-" )) == false) {
			$this->operator = "-";
			list($this->numberOne, $this->numberTwo) = explode($this->operator, $this->string); 
		} elseif (!(strpos($this->string, "/")) == false) {
			$this->operator = "/";
			list($this->numberOne, $this->numberTwo) = explode($this->operator, $this->string); 
 
		
		} elseif (!(strpos($this->string, "x")) == false) {
			$this->operator = "x";
			list($this->numberOne, $this->numberTwo) = explode($this->operator, $this->string); 
 
		} elseif (!(strpos($this->string, "%")) == false) {
			$this->operator = "%";
			list($this->numberOne) = explode($this->operator, $this->string); 
		}
		elseif (!(strpos($this->string, "√2")) == false) {
			$this->operator = "√2";
			list($this->numberOne) = explode($this->operator, $this->string); 
		}
		elseif (!(strpos($this->string, "+")) == false) {
			$this->operator = "+";
			list($this->numberOne, $this->numberTwo) = explode($this->operator, $this->string); 
		}
    }
	public function doMath ($post) {
    	$this->string = $post;
    	
    	$objCalc = new Calculate;
    	switch ($this->operator){
    		case "+":
    			$objCalc->addNumbers($this->numberOne, $this->numberTwo);
    			break;
    		case "-":
    			$objCalc->substractNumbers($this->numberOne, $this->numberTwo);
    			break;
    		case "x":
    			$objCalc->multiplyNumbers($this->numberOne, $this->numberTwo);
    			break;
    		case "/":
 				$objCalc->divideNumbers($this->numberOne, $this->numberTwo);   
 				break;
 			case "%":
 				$objCalc->getPercentOfNumber($this->numberOne, $this->operator, $this->string);
 				break;
 			case "√2": 
 				$objCalc->getSquareRoot($this->numberOne);
 				break;
 		}
    }
}