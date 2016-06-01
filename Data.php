<?php
namespace Data;

class Data
{
    public function signup($username, $password, $rpassword, $email)
    {
        $this->assertEquals($password, $rpassword);
    }
}