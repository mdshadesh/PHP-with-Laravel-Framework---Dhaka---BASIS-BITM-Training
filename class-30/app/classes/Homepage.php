<?php


namespace App\classes;


class Homepage
{
    public function index ()
    {
        header('Location: action.php?page=signin');
    }
}