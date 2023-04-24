<?php


namespace App\classes;


class Series
{
    public $firstNumber, $lastNumber, $result;
    public function __construct($post)
    {
       if($post)
       {
           $this->firstNumber = $post['first_number'];
           $this->lastNumber = $post['last_number'];
       }
    }
    public function series ()
    {
        session_status();
        if (!isset($_SESSION['auth_id']))
        {
            if($this->firstNumber < $this->lastNumber)
            {
                for($this->firstNumber;$this->firstNumber <= $this->lastNumber; $this->firstNumber++)
                {
                    $this->result .= $this->firstNumber.',';
                }
            }
            else
            {
                for($this->firstNumber;$this->firstNumber >= $this->lastNumber; $this->firstNumber--)
                {
                    $this->result .= $this->firstNumber.',';
                }
            }
            return rtrim($this->result ,',');
        }
        else {
            header("Location:action.php?page=login");
        }

    }



    public function sumOfSeries ()
    {
        $this->result = 0;
        if($this->firstNumber < $this->lastNumber)
        {
            for($this->firstNumber;$this->firstNumber <= $this->lastNumber; $this->firstNumber++)
            {
                $this->result += $this->firstNumber;
            }
        }
        else
        {
            for($this->lastNumber;$this->lastNumber <= $this->firstNumber; $this->lastNumber++)
            {
                $this->result += $this->lastNumber;
            }
        }
        return $this->result;


    }

}