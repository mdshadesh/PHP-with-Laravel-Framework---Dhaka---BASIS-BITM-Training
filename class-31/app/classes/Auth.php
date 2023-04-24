<?php


namespace App\classes;


class Auth
{
    public $email, $password,$userEmail,$userPassword;
    public function __construct($post = null)
    {
       if($post)
       {
           $this->userEmail = $post['email'];
           $this->userPassword = $post['password'];
       }

        $this->email = 'admin@admin.com';
        $this->password = '123456';

    }
    public function checkUser()
    {
        if($this->email == $this->userEmail && $this->password == $this->userPassword)
        {
            session_start();
            $_SESSION['auth_id'] = session_id();
            header("Location:action.php?page=home");
        }
        return "Email or Password is invalid";

    }
    public function logout()
    {
        session_start();
        unset($_SESSION['auth_id']);
        header("Location:action.php?page=login");
    }

}