<?php


namespace App\classes;

use App\classes\User;

class Auth
{
    public $email, $password;

    public $user, $users;

    public function __construct($post = null)
    {
        if ($post)
        {
            $this->email = $post['email'];
            $this->password = $post['password'];
        }
    }

    public function signIn ()
    {
        $this->user = new User();
        $this->users = $this->user->allUsers();

        foreach ($this->users as $user)
        {
            if ($user['email'] == $this->email && $user['password'] == $this->password)
            {
                session_start();
                $_SESSION['id'] = session_id();

                header('Location: action.php?page=home');
            }
        }
        return 'Email or password is invalid';
    }

    public function singOut()
    {
        session_start();
        unset($_SESSION['id']);
        header("Location: action.php?page=signin");
    }
}