<?php
namespace Data;

class Data
{
    public function signup($username, $password, $rpassword, $email)
    {
        if($password == $rpassword)
           {
               echo 'true';
           }
        else
           {
               echo 'false';
           }
    }
}