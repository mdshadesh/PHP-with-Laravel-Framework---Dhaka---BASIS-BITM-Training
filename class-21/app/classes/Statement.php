<?php


namespace App\classes;


class Statement
{
        public $meggage;

        public $FastNumber, $LastNumber;

        public function index()
        {
            $this->meggage = "Hello Shadesh";
            echo "<br>";
            echo $this->meggage;
            echo "<br>"; echo "<br>";

            $this->FastNumber = 10;
            $this->LastNumber = 20;
            echo "The Number is : ";

//            for ($this->FastNumber; $this->FastNumber <= 20; $this->FastNumber--)
//            {
////                echo "I Love You MySelf <br>";
//                  echo $this->FastNumber." , ";
//            }
//            while ($this->FastNumber < 20)
//            {
//                echo $this->FastNumber." , ";
//                $this->FastNumber++;
//            }

//            do{
//                echo $this->FastNumber." , ";
//                $this->FastNumber++;
//            }while($this->FastNumber <= 20);


                for( $i = 1; $i <= 10; $i++ )
                {
                    echo $i;
                    echo "<br>";
                }

        }
}