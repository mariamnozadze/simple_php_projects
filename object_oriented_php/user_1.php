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

class AdminUser extends User
{
    public $level;
    public function __construct($username, $email, $level)
    {
        $this->level = $level;
        parent::__construct($username, $email);
    }
}

$userOne = new User('Mario', 'mario@thenetninja.co.uk');
$userTwo = new User('luigi', 'luigi@thenetninja.co.uk');
$userThree = new AdminUser('Yoshi', 'yoshithenetninja.co.uk', 5);

echo $userThree->username . '<br>';
echo $userThree->getEmail() . '<br>';
echo $userThree->level . '<br>';


// $userOne->setEmail('yoshithenetninja.co.uk');

// echo $userOne->getEmail() . '<br>';
// echo $userTwo->getEmail() . '<br>';
