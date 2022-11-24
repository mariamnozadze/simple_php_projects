<?php
//----OVERRIDING - PROTECTED MODIFIERS---------
class User
{

    /**by default children inherit these values */
    public $username;
    // private $email;
    protected $email;
    public $role = 'member';

    public function __construct($username, $email)
    {
        $this->username = $username;
        $this->email = $email;
    }

    public function __destruct()
    {
        echo "The user $this->username was removed <br>";
    }

    public function __clone()
    {
        $this->username = $this->username . '(cloned)<br>';
    }

    public function addFriend()
    {
        return "$this->email Added a new friend";
    }

    public function message()
    {
        return "$this->email sent a new message";
    }

    public function getEmail()
    {
        return $this->email;
    }

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
    public $role = 'admin';
    // private $email;
    public function __construct($username, $email, $level)
    {
        $this->level = $level;
        parent::__construct($username, $email);
        // $this->email = $email;
    }

    public function message()
    {
        return "$this->email, an admin, sent a new message";
    }
}

$userOne = new User('Mario', 'mario@thenetninja.co.uk');
$userTwo = new User('luigi', 'luigi@thenetninja.co.uk');
$userThree = new AdminUser('Yoshi', 'yoshithenetninja.co.uk', 5);

// unset($userOne);
$userFour = clone $userOne;
echo $userFour->username;
