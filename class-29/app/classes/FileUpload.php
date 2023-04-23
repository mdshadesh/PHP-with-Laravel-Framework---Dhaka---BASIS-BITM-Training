<?php


namespace App\classes;


class FileUpload
{
    public $name, $email, $number;

    public $image, $imageName, $imageDerectory;

        public function __construct($post, $file)
        {
            if ($post)
            {
                $this->name = $post['name'];
                $this->email = $post['mail'];
                $this->number = $post['number'];

                $this->image = $file['image'];
            }
        }
        public function uploadFile ()
        {
            if (isset($this->image))
            {
                $this->imageName = $this->image['name'];
                $this->imageDerectory = 'assets/img/upload/'.$this->imageName;
                move_uploaded_file($this->image['tmp_name'],$this->imageDerectory);
            }
            return'success';
        }
}
