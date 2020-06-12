<?php 

class Persona {
    public $name;
    public $age;

    public function setName($name){
        $this->name = $name;
    }
    public function getName(){
        // return $this->name;
        echo "Name: ".$this->name."<br>";
    }
    public function setAge($age){
        $this->age = $age;
    }
    public function getAge(){
       // return $this->age;
       echo $this->name."'s age is ".$this->age."<br>";
    }

}
$user = new Persona();
$user->setName('Joel');
$user->setAge(23);
//var_dump($user);
$user->getName();
$user->getAge();
