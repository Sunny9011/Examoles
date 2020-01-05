<?php
class User {
    public $firstName;
    public $secondName;

    public function hello()
    {
        echo 'Hello ' . $this->firstName;
        return $this;
    }

    public function register()
    {
        echo '>> registered';
        return $this;
    }

    public function mail()
    {
        echo '>> email send';
    }
}
$user1 = new User();
$user1->firstName  = 'Jane';

echo $user1->hello()->register()->mail();
