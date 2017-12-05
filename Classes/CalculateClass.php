<?php
class Calculate extends CalculatorAbstract {
    
	public function addNumbers($numberOne, $numberTwo) {
		$this->_output = parent::addNumbers($numberOne, $numberTwo);
        echo json_encode($this->output); 
	}
    public function getPercentOfNumber($numberOne, $operator){
        $this->numberOne = $numberOne;
        $this->output = $this->numberOne / 100 ;
        echo json_encode($this->output); 
    }

    final public function getSquareRoot($numberOne)  {
        $this->output = sqrt($numberOne);
        echo json_encode($this->output); 
    }

    
}


