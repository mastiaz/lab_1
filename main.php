<?php

$password = $_POST["password"];
$login = $_POST["login"];
$user_data = $login ." ". $password;

class  User
{
    public $name;
    public $surname;
    public $role;
    public $pass;
    public $log;


}

class Admin extends User
{
    function  __construct()
    {
      $this->log = "Adminka";
        $this->pass = "Adminka123";
        $this->role = "Админ";
        $this->name = "Admin";
        $this->surname = "Admin";

    }

    public function printInfo()
    {
        echo "Здравствуйте " . $this->role . " " . $this->name . " " . $this->surname . " " . "Вы можете управлять сайтом";
    }
}


class Client extends User
{
    function  __construct()
    {
        $this->log = "Test1";
        $this->pass = "Test1";
        $this->role = "Клиент";
        $this->name = "Test1 ";
        $this->surname = "Test1";

    }

    public function printInfo()
    {
        echo "Здравствуйте " . $this->role . " " . $this->name . " " . $this->surname . " " . "Вы можете пользоваться сайтом";
    }
}


class Manager extends User
{
    function  __construct()
    {
         $this->log = "Test2";
        $this->pass = "Test2";
        $this->role = "Менеджер";
        $this->name = "Test2 ";
        $this->surname = "Test2";

    }

    public function printInfo()
    {
        echo "Здравствуйте " . $this->role . " " . $this->name . " " . $this->surname . " " . "Вы можете вносить изменения в сайт";
    }
}

if ($login == "Adminka" and $password == "Adminka123") {
    $adm = new Admin();
    $adm -> printInfo();
}
elseif ($login == "Test1" and $password == "Test1") {
    $cli = new Client();
    $cli -> printInfo();
}
elseif ($login == "Test2" and $password == "Test2") {
    $man = new Manager();
    $man -> printInfo();
}else {
    echo "Вы ввели неверный логин или пароль";
}


?>