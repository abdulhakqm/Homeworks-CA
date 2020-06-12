<?php

class Person {
    public $name;
    public $job;
    public $age;

    public function __construct ($name,$job,$age){
        $this->name =ucfirst($name);
        $this->job = $job;
        $this->age = $age;
    }
    public function changeJob($newJob){
        $this->job = $newJob;
    }
    public function happyBirthday(){
        ++$this->age;
    }
}
// Create two new people Tom with job "Button-Pusher", with age 34 and John with job "Lever-Puller" age 41
 
$tom = new Person('tom','Button-Pusher',34);
$john = new Person('john','Lever-Puller',41);

// Output their starting point
echo "<pre>Person 1: ", print_r($tom, TRUE), "</pre>";
echo "<pre>Person 2: ", print_r($john, TRUE), "</pre>";
 
// Give Tom a promotion (change his job to "Box-Mover" using changeJob method) and a birthday
 $tom->changeJob('Box-Mover');
 $tom->happyBirthday();
 
// John just gets a year older
 $john->happyBirthday();
 
// Output the ending values
echo "<pre>Person 1: ", print_r($tom, TRUE), "</pre>";
echo "<pre>Person 2: ", print_r($john, TRUE), "</pre>";
