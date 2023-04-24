<?php


namespace App\classes;
use App\classes\User;
use App\classes\Example;
use App\classes\Example2;
use App\classes\Example3;


class Student extends Example3 implements Example, Example2
{
    use Example4;

    public $country = 'Bangladesh';

    public static $name = 'Hasan';

    public function __construct()
    {
//        $this->name ='BASIS';
//        $this->city ='Noakhali';


    }

    public function manage()
    {
//        echo $this->country;
//        echo $this->city;
//        echo $this->name;
//        echo $this->index();

//        $this->two();
        $this->four();
    }

    public function two()
    {
        // TODO: Implement two() method.
        echo 'Hello Bodna';
    }

    public function index()
    {
       echo 'Hello';
    }
    public function one()
    {
        // TODO: Implement one() method.

    }
    public static function four()
    {
        echo 'Hello Naimul';
    }

}
