<?php
class User
{

    public $username;
    private $email;

    public function __construct($username, $email)
    {
        $this->username = $username;
        $this->email = $email;
    }

    public function addFriend()
    {
        return "$this->email Added a new friend";
    }

    //getters
    public function getEmail()
    {
        return $this->email;
    }

    //setters
    public function setEmail($email)
    {
        if (strpos($email, '@') > -1) {
            $this->email = $email;
        }
    }
}

$userOne = new User('Mario', 'mario@thenetninja.co.uk');
$userTwo = new User('luigi', 'luigi@thenetninja.co.uk');

$userOne->setEmail('yoshithenetninja.co.uk');

echo $userOne->getEmail() . '<br>';
echo $userTwo->getEmail() . '<br>';
