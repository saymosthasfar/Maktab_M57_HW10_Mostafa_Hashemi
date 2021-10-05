<?php

abstract class User
{
    protected $username;
    abstract function stateYourRole();

    public function getUsername()
    {
        return $this->username;
    }

    public function setUsername($username)
    {
        $this->username = $username;
    }
}

class Admin extends User
{
    public function stateYourRole()
    {
        return "I'm the BOSS, LOSER!";
    }
}

class Viewer extends User{
    public function stateYourRole()
    {
        return "I'm just a simple viewer!";
    }
}

$admin1 = new Admin();
$admin1->setUsername("Balthazar");
echo $admin1->stateYourRole();