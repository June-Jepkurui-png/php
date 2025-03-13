 <?php

//syntax
echo "Hello World<br>";

//comments 
ECHO "Hello world<br>";
//variables
$myname = "june";
echo $myname;
//variables scope 
//local
//global
//static
$numbers1 = 10;
//global scope 
$numbers3 = 50;
function testing2(){
  global $numbers3;
  echo $numbers3;
}
testing2();
echo $numbers3;

//static scope 
function testing3(){
  static $numbers4 = 60;
  echo $numbers4, "<br>";
  $numbers4++;
}
testing3();
testing3();
// echo $numbers4; // This line will cause an error because $numbers4 is not in scope here
//arrays
$fruits = array("apple", "banana", "orange");
//object
class Person {
  public $name;
  public $age;
  public function __construct($name, $age){
    $this->name = $name;
    $this->age = $age;
  }
  public function introduce(){
    echo "My name is " . $this->name . " and I am " . $this->age . " years old";
  }
}
$person = new Person("june", 25);
$person->introduce();

//functions
function addNumbers($num1, $num2){
  return $num1 + $num2;
}
echo addNumbers(10, 20);

//syntax
echo "Hello World<br>";
?>