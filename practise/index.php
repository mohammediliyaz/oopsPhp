<?php


class User
{
    protected $username;
    private $age;
    public $lastname;

    public function __construct($username, $age)
    {
        $this->username = $username;
        $this->age = $age;
    }
    public function __destruct()
    {
        echo "$this->username is removed<br/>";
    }
    public function __clone()
    {
        $this->lastname = $this->lastname . "(cloned)";
    }
    public function addFriend()
    {
        return "$this->username a friend";
    }
    public function getusername()
    {
        return $this->username;
    }
    public function age($age)
    {
        $this->age = $age;
        echo $this->age;
    }
    public function message()
    {
        return "$this->username, you are welcomed!";
    }
}

class AdminUser extends User
{
    public $level;
    public function __construct($username, $age, $level)
    {
        $this->level = $level;
        parent::__construct($username, $age);
    }
    public function message()
    {
        return "$this->username as admin, you are welcomed!";
    }
}

$userone = new User('john', 23);
$usertwo = new User('lee', 20);
$userthree = new AdminUser('mario', 29, 3);

// echo 'this userone belongs to class ' . get_class($userone); // which class belonging
// var_dump($userone);
//echo $userone->addFriend('jhon');
//print_r(get_class_methods($userone)); // . "<br/> " . get_class_methods($userone));
//print_r($userone->addFriend());
//print_r($usertwo->addFriend());
//echo $userone->getusername() . '<br/>';
//$userone->age(50);

//echo $userthree->getusername();
//echo $userthree->level;

//echo $usertwo->message() . '<br/>';
//echo $userthree->message();

$userfour = clone $userone;
echo $userfour->lastname;
?>

<html>

<head>
    <title>opps</title>
</head>

<body>
</body>

</html>