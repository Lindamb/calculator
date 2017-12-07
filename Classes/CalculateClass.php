<?php
class Calculate extends CalculatorAbstract {
    
	public function addNumbers($numberOne, $numberTwo) {

		$this->_output = parent::addNumbers($numberOne, $numberTwo);
        
        echo json_encode($this->output); 
	}
    public function getPercentOfNumber($numberOne, $operator, $string){
        
        $this->operator = $operator;

        $this->string = $string;

        $this->numberOne = $numberOne;

        if(!(strpos($this->numberOne, "+")) == false) {
            $this->operator = "+";
            
            list($this->numberOne, $this->numberTwo) = explode($this->operator, $this->string);
            
            $this->output = $this->numberOne * (1 + $this->numberTwo/100);
            
            echo json_encode($this->output); 
        
         } elseif (!(strpos($this->numberOne, "-")) == false) {
            
            $this->operator = "-";
            
            list($this->numberOne, $this->numberTwo) = explode($this->operator, $this->string);
            
            $this->output = $this->numberOne * (1 - $this->numberTwo / 100);
            
            echo json_encode($this->output);
         
         }  elseif (!(strpos($this->numberOne, "x")) == false) {
            
            $this->operator = "x";
            
            list($this->numberOne, $this->numberTwo) = explode($this->operator, $this->string);
            
            $this->output = $this->numberOne * ($this->numberTwo / 100);
            
            echo json_encode($this->output);

         } elseif (!(strpos($this->numberOne, "/")) == false) {
            
            $this->operator = "/";
            
            list($this->numberOne, $this->numberTwo) = explode($this->operator, $this->string);
            
            $this->output = $this->numberOne / ($this->numberTwo / 100);
            
            echo json_encode($this->output);

         } else {

            $this->output = $this->numberOne / 100; 
            
            echo json_encode($this->output); 
    }
}    


    final public function getSquareRoot($numberOne)  {
        
        $this->output = sqrt($numberOne);
        
        echo json_encode($this->output); 
    }

    
}


