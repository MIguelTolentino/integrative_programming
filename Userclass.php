<?php

class User
{
    // Properties
    public $name;
    public $username;
    public $email;

    function set_name($name)
    {
        $this ->name = $name;
    }
    function get_name()
    {
        return $this ->name;
    }
    function set_username($username)
    {
        $this ->username = $username;
    }
    function get_username()
    {
        return $this ->username;
    }
    function set_email($email)
    {
        $this ->email = $email;
    }
    function get_email()
    {
        return $this ->email;
    }
}
$example = new User();
 $example ->set_name("Miguel Dominic G. Tolentino");
 $example ->set_username("Mico2218");
 $example ->set_email("tolentinomico@gmail.com");

 echo $example ->get_name(). " as ". $example->get_username() . " Added a friend." . "<br>";
 echo $example ->get_username() . " Posted a status.";

?>
