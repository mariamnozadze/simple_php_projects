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
}

$userOne = new User('Mario', 'mario@thenetninja.co.uk');
$userTwo = new User('luigi', 'luigi@thenetninja.co.uk');

// echo $userOne->username . '<br>';
// echo $userOne->addFriend() . '<br>';

// echo $userTwo->username . '<br>';
// echo $userTwo->addFriend();

// $userTwo->username = 'Yoshi';
// $userTwo->email = 'yoshi@thenetninja.co.uk';

// $userOne->email = 3;
//not always a good idea to allow this to be public

// echo $userOne->email . '<br>';
// echo $userTwo->email . '<br>';

echo $userOne->addFriend();
/**
 * mario@thenetninja.co.uk Added a new friend
 * <--- we used public function, even tho the email is private
 */
