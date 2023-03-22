<?php

namespace App\classes;

use const http\Client\Curl\Features\LARGEFILE;

class HelloPhpCoder
{
    public $FirstNumber, $LastNumber;
    public $FNumber, $LNumber;


    public function index ()
    {
        echo "Hello Php Coder"; echo "<br>";
        echo "<br>";
        echo "This is Naimul Hasan Shadesh";
        echo "<br>";

        $this->FirstNumber = 30;
        $this->LastNumber = 20;

        echo "<br>";
        echo "The Sum is : ".$this->FirstNumber += $this->LastNumber;

        echo "<br>";
        echo "The Sub is : ".$this->FirstNumber -= $this->LastNumber;

        echo "<br>";
        echo "The Mult is : ".$this->FirstNumber *= $this->LastNumber;

        echo "<br>";
        echo "The div is : ",$this->FirstNumber /= $this->LastNumber;

        echo "<br>";
        echo "The Modu is : ".$this->FirstNumber %= $this->LastNumber;

        echo "<br>";
        echo "The Number is : ".$this->FirstNumber .= $this->LastNumber;echo "<br>";echo "<br>";echo "<br>";

        $this->FNumber = 10;
        $this->LNumber = 20;

        echo "<br>";
        echo "The greater than : ";
        echo $this->FNumber > $this->LNumber;    // 0

        echo "<br>";
        echo "The greater than : ";
        echo $this->FNumber < $this->LNumber;     // 1

        echo "<br>";
        echo "The greater than : ";
        echo $this->FNumber >= $this->LNumber;   // 0


        echo "<br>";
        echo "The greater than : ";
        echo $this->FNumber <= $this->LNumber;   // 1

        echo "<br>";
        echo "The greater than : ";
        echo $this->FNumber == $this->LNumber;    // 0

        echo "<br>";
        echo "The greater than : ";
        echo $this->FNumber === $this->LNumber;    // 0

        echo "<br>";
        echo "The greater than : ";
        echo $this->FNumber != $this->LNumber;   // 1

        echo "<br>";
        echo "The greater than : ";
        echo $this->FNumber !== $this->LNumber; echo "<br>";echo "<br>";echo "<br>";echo "<br>";


        $this->Number1 = 10;
        $this->Number2 = 15;
        $this->Number3 = 20;

        echo "<br>";
        echo "The Equation is : ";
        echo ($this->Number1 < $this->Number3) && ($this->Number2 < $this->Number3);   // 1

        echo "<br>";
        echo "The Equation is : ";
        echo ($this->Number1 < $this->Number3) && ($this->Number2 > $this->Number3);   //  0

        echo "<br>";
        echo "The Equation is : ";
        echo ($this->Number1 > $this->Number3) && ($this->Number2 < $this->Number3);    // 0

        echo "<br>";
        echo "The Equation is : ";
        echo ($this->Number1 > $this->Number3) && ($this->Number2 > $this->Number3); echo "<br>";echo "<br>";echo "<br>";echo "<br>";   // 0


        echo "<br>";
        echo "The Equation is : ";
        echo ($this->Number1 < $this->Number3) || ($this->Number2 < $this->Number3);   // 1

        echo "<br>";
        echo "The Equation is : ";
        echo ($this->Number1 < $this->Number3) || ($this->Number2 > $this->Number3);   //  1

        echo "<br>";
        echo "The Equation is : ";
        echo ($this->Number1 > $this->Number3) || ($this->Number2 < $this->Number3);    // 1

        echo "<br>";
        echo "The Equation is : ";
        echo ($this->Number1 > $this->Number3) || ($this->Number2 > $this->Number3); echo "<br>";echo "<br>";echo "<br>";   // 0


        echo "<br>";
        $a = false;
        echo "The Equation is : ".$a;

        echo "<br>";
        $a = false;
        echo "The Equation is : ".!$a;

        echo "<br>";echo "<br>";echo "<br>";echo "<br>";
        //////////////////

        $this->A = 10;

        if($this->A > 20)
        {
            echo "This Equation it's Correct ";
        }
        else{
            echo "This Equation it's Not Correct";
        }
        echo "<br>"; echo "<br>"; echo "<br>";


        ///////// this equation value needed only B value ////

        $this->B = 25;
        switch ($this->B)
        {
            case 10:
                echo "This Number It's Correct";
                break;
            case 20:
                echo "This value it's Number";
                break;
            case 25:
                echo "Counting value";
                break;
            default:
                echo "wrong";
        }

        

    }
}