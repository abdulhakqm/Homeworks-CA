<?php
 /*
Procedural Approach
While this code isn't necessarily bad, there's a lot to keep in mind while coding. 
The array of the affected person's attributes must be passed and returned from each function call, which leaves margin for error.

To clean up this example, it would be desirable to leave as few things up to the developer as possible. 
Only absolutely essential information for the current operation should need to be passed to the functions.

This is where OOP steps in and helps you clean things up.

Use object oriented programming to rewrite the code

 */
function changeJob($person, $newjob)
{
  $person['job'] = $newjob; // Change the person's job
  return $person;
}
 
function happyBirthday($person)
{
  ++$person['age']; // Add 1 to the person's age
  return $person;
}
 
$person1 = array(
  'name' => 'Tom',
  'job' => 'Button-Pusher',
  'age' => 34
);
 
$person2 = array(
  'name' => 'John',
  'job' => 'Lever-Puller',
  'age' => 41
);
 
// Output the starting values for the people
echo "<pre>Person 1: ", print_r($person1, TRUE), "</pre>";
echo "<pre>Person 2: ", print_r($person2, TRUE), "</pre>";
 
// Tom got a promotion and had a birthday
$person1 = changeJob($person1, 'Box-Mover');
$person1 = happyBirthday($person1);
 
// John just had a birthday
$person2 = happyBirthday($person2);
 
// Output the new values for the people
echo "<pre>Person 1: ", print_r($person1, TRUE), "</pre>";
echo "<pre>Person 2: ", print_r($person2, TRUE), "</pre>";
 
?>