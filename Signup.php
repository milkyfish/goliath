<?php
use Data\Data as Data;

require("Data.php");
$data = new Data;

class Signup extends PHPUnit_Framework_TestCase
{
    
    public function equalPasswords() {
        $this->assertEquals(1+1, 1);
    }
}
?>
<!doctype html>
<html>
<head>
    <title>Simple Goliath Template</title>
    <link rel="stylesheet" href="/css/foundation.min.css" />
</head>
<body>
<div class="row">
    <div class="small-12 large-4 large-offset-4 columns">
        <h2>Goliath Sign Up Form</h2>
        <form method="post">
            <label>Username</label>
            <input type="text" name="username" /><br /> 
            <label>Password</label>
            <input type="password" name="password" /><br /> 
            <label>Repeat Password</label>
            <input type="password" name="rpassword" /><br /> 
            <label>E-mail</label>
            <input type="email" name="email" /><br /> 
            <button type="submit" name="signup" class="button">Sign Up</button>
        </form>
    </div>
</div>
</body>
</html>