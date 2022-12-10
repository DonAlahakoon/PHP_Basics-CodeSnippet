<?php

//I N H E R I T A N C E
class Chef{
  public $name;
  public $age;
  function __construct($name,$age){
    $this->name = $name;
    $this->age = $age;
  }
  function makesChicken(){
    print "Chef makes chicken<br>";
  }
  function makesSalad(){
    print "Chef makes salad<br>";
  }
  function makeSpecialDish(){
    print "Chef makes bbq ribs<br>";
  }


}
class ItalianCheff extends Chef{
  public $ctryOfOrigin;
  function __construct($name,$age,$ctryOfOrigin){
    parent::__construct($name,$age); //calling super class constructor
    $this->ctryOfOrigin = $ctryOfOrigin;
  }
  function makesPasta(){
    print("Italian cheff makes pasta<br>");
  }
  function makeSpecialDish(){
    print "The chef makes chicken parm<br>";
  }
}

$chef = new Chef("Gordan Ramsay",50);
$chef->makesChicken();
$chef->makeSpecialDish();

$iChef = new ItalianCheff("Massimo Botura",45,"Italy");
$iChef->makesPasta();
$iChef->makesChicken();
$iChef->makeSpecialDish();

echo "<br><br>";


// A B S T R A C T   C L A S S E S   &   A T T R I B U T E S

abstract class Vehicle{
  //abstract class contains both abstract and non-abstract methods
  public abstract function move();
  public function getDescription(){
    echo "Vehicles are used for transportation<br><br>";
  }
}
class bicycle extends Vehicle{
  public function move(){
    echo "Bicycle pedals forward.<br>";
  }
}
class plane extends Vehicle{
  public function move(){
    echo "Plane move through the air<br>";
  }
}

$b = new bicycle();
$b->move();

$p = new plane();
$p->move();
$p->getDescription();


// I N T E R F A C E   I N H E R I T A N C E   ( P O L Y M O R P H I S M )
       interface Animal{
         //in a interface all methods are abstract
         public function speak();
       }
       class Dog implements Animal{
         public function speak(){
           echo "Woof woof<br>";
         }
       }
       class Cat implements Animal{
         public function speak(){
           echo "Meaw meaw<br>";
         }
       }
      //creating an array of animals
       $animals = [
         new Dog(),
         new Cat()
       ];
       foreach ($animals as $a) {
         $a->speak();
       }

 ?>
