<?php
include('CalculatorInterface.php');

abstract class CalculatorAbstract implements CalculatorInterface {
    protected $numberOne;
    protected $numberTwo;
    protected $output;
    protected $percent;
    protected $operator;
    
    public function addNumbers($numberOne, $numberTwo) {
        $this->output = $numberOne + $numberTwo;
    }
    public function substractNumbers($numberOne, $numberTwo) {
        $this->output = $numberOne - $numberTwo;        
            $this->output = json_encode($this->output); 
            echo json_encode($this->output);
    }
    public function divideNumbers($numberOne, $numberTwo) {
        $this->output = $numberOne / $numberTwo;        
            $this->output = json_encode($this->output); 
            echo json_encode($this->output);
    }
    public function multiplyNumbers($numberOne, $numberTwo) {
        $this->output = $numberOne * $numberTwo;        
            $this->output = json_encode($this->output); 
            echo json_encode($this->output);
    }
    abstract public function getPercentOfNumber($numberOne, $operator, $string);
    
    private function _getSquareRoot($numberOne) {
    }
}
