<?php
class Person{
    public $name ;
    // public $email;
    // public $password = "12345678";

    public function __construct($name){
    $this -> name = $name;
    }

    public function __setemail($email,$password)
    {
        $this -> email = $email;
        $this -> password = $password;
    }

    public function __getemail(){
        return $this->email '<br>' $this->password;

    }
}
$member1 = new Person("nysa");
$member2 = new Person("simran");
$member3 = new Person("somu");

$detail1 = new Person("somu@gmail.com","love");
$detail2 = new Person("simran@gmail.com","you");

echo $member1->name;
echo"<br>";
echo $member2->name;
echo"<br>";

echo $member3->name;
echo $detail->email;
echo $detail->password;


?>