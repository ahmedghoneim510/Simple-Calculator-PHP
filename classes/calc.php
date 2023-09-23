<?php
class calc{
    public $operator;
    public $num1;
    public $num2;
    function __construct(string $oper,int $num1,int $num2){
        $this->operator=$oper;
        $this->num1=$num1;
        $this->num2=$num2;
    }

    public function calculator(){
        if($this->operator =='add'){
            return $this->num1+$this->num2;
        }
        else if ($this->operator =='sub'){
            return $this->num1-$this->num2;
        }
        else if ($this->operator =='mul'){
            return $this->num1*$this->num2;
        }
        else if ($this->operator =='div'){
            if($this->num2==0){
                echo "ERROR:Can't Divide by zero";
            }
            else
            {
                return $this->num1/$this->num2;
            }
        }
        else{
            $res= "Error..!";
            return $res; 
        }
    }
}