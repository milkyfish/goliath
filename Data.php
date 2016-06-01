<?php
namespace Data;

class Data
{
    public function signup($username, $password, $rpassword, $email)
    {
<<<<<<< HEAD
        $this->assertEquals($password, $rpassword);
=======
        if($password == $rpassword)
           {
               echo 'true';
           }
        else
           {
               echo 'false';
           }
>>>>>>> refs/remotes/origin/master
    }
}