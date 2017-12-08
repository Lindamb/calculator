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
        

        switch($this->operator ){
            case (!(strpos($this->numberOne, "+")) )== false:
                $this->operator = "+";
                list($this->numberOne, $this->numberTwo) = explode($this->operator, $this->string);
                $this->output = $this->numberOne * (1 + $this->numberTwo/100);
                break;
            case (!(strpos($this->numberOne, "-")) == false):
                $this->operator = "-";
                list($this->numberOne, $this->numberTwo) = explode($this->operator, $this->string);
                $this->output = $this->numberOne * (1 - $this->numberTwo / 100);
                break;
            case (!(strpos($this->numberOne, "x")) == false):
                $this->operator = "x";
                list($this->numberOne, $this->numberTwo) = explode($this->operator, $this->string);
                $this->output = $this->numberOne * ($this->numberTwo / 100);
                break;
            case (!(strpos($this->numberOne, "/")) == false):
                $this->operator = "/";                
                list($this->numberOne, $this->numberTwo) = explode($this->operator, $this->string);
                $this->output = $this->numberOne / ($this->numberTwo / 100);
                break;
            default:
                $this->output = $this->numberOne / 100; 
                break;     
        }
                echo json_encode($this->output);
    }    
    

    final function getSquareRoot($numberOne)  {
        
        $this->output = sqrt($numberOne);
        
        echo json_encode($this->output); 
    }
    
}
