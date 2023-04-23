<?php


namespace App\classes;


class User
{
    public $email, $password;
    public function __construct($post)
    {
        if ($post)
        {
            $this->email = $post['email'];
            $this->password = $post['password'];
        }
    }

    public function allUsers()
        {
            return[
                0 => [
                    'id' => 1,
                    'email' => 'mdshadesh@gmail.comn',
                    'password' => '123'
                ],
                1 => [
                    'id' => 2,
                    'email' => 'mdhasan@gmail.com',
                    'password' => '456'
                ],
                2 => [
                    'id' => 3,
                    'email' => 'mdnaimul@gmail.com',
                    'password' => '789'
                ],
                3 => [
                    'id' => 4,
                    'email' => 'shadesh@gmail.com',
                    'password' => '147'
                ]

            ];
        }
     public function cheekUser()
     {
         $user = $this->allUsers();
         foreach ($this->$user as $user)
         {
             header("Loaction: action.php?page=home");
         }
     }
}