<?php


namespace App\classes;


class User
{
    public function allUsers ()
    {
        return [
            0 => [
                'id' => 1,
                'email' => 'mdshadesh@gmail.com',
                'password' => '123',
            ],
            1 => [
                'id' => 2,
                'email' => 'naimul@gmail.com',
                'password' => '123',
            ],
        ];
    }

//    protected function country()
//    {
//        echo "country : Bangladesh";
//    }
//
//    protected function phoneNumber()
//    {
//        echo '01874743293';
//    }

}