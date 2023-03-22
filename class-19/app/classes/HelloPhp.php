<?php

namespace App\classes;

use mysql_xdevapi\BaseResult;

class HelloPhp
{
    public $message;
    public  $FastName, $LastName;

    public $FastNumber, $LastNumber, $sum;

    public function __construct()
    {
        $this->message = "Hello PHP  &nbsp; ";

        $this->FastName = " Naimul Hasan";
        $this->LastName = " Shadesh &nbsp;&nbsp;&nbsp;&nbsp;";

        $this->FastNumber=-10;
        $this->LastNumber=20;

    }

    public function index ()
    {
        echo $this->message;

        echo $this->FastName;
        echo $this->LastName;

        echo gettype($this->FastName);  // chaking oporatior
        echo '<br/>';
        $this->sum=$this->FastNumber+$this->LastNumber;
        echo "The Sum is : ".$this->sum;
        echo '<br/>';

        $this->sum=$this->FastNumber-$this->LastNumber;
        echo "The Sub is : ".$this->sum;
        echo '<br/>';

        $this->sum=$this->FastNumber*$this->LastNumber;
        echo "The Mult is : ".$this->sum;
        echo '<br/>';

        $this->sum=$this->FastNumber/$this->LastNumber;
        echo "The Divi is : ".$this->sum;
        echo '<br/>';

        $this->sum=$this->FastNumber%$this->LastNumber;
        echo "The Per is : ".$this->sum;
        echo '<br/>';

//        echo '<br>';
//        echo $this->FastNumber++;
//        echo '<br>';
//        echo $this->LastNumber;

        echo '<br>';
        echo -$this->FastNumber;

        echo '<br>';
        echo $this->FastNumber++;

        echo '<br>';
        echo ++$this->FastNumber;

        echo '<br>';
        echo $this->FastNumber--;

        echo '<br>';
        echo --$this->FastNumber;

    }
}
