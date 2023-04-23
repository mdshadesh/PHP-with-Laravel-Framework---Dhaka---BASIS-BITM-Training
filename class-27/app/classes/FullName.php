<?php


namespace App\classes;


class FullName
{
    public $firstName, $lastName, $result;

    public function __construct($post)
    {
        $this->firstName = $post['first_name'];
        $this->lastName = $post['last_name'];
    }

    public function index ()
    {
        return $this->firstName.' '.$this->lastName;
    }
}