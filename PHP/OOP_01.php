<?php
//C L A S S E S   A N D   O B J E C T S
class Book{//this is a class

  private $title;
  public $author;
  public static $staticAttribute = "This is a static attribute"; //Static attributes belongs class rather than object

  //constructor
  function __construct($title,$author){
    $this->title = $title;
    $this->author = $author;
  }
  //using getter and setter to access title variable
  function setTitle($title){
    $this->title = $title;
  }
  function getTitle(){
    return $this->title;
  }
  function readBook(){
    print "Reading $this->title by $this->author<br><br>";
  }
}
//creating a new object from class Book
$book = new Book("Harry Potter","JK Roling");
$book->setTitle("Half-blood Prince");
$book->readBook();

echo Book::$staticAttribute,"<br><br>";
//E X C E P T I O N   C A T C H I N G
try{
  throw new Exception('Error message for the user.');
}
catch(Exception $e){
  echo $e->getMessage()."<br><br>";
}
finally{
  echo "Code inside finally block always execute.<br><br>";
}

try{
  $num = 10/0;
}
catch(DivisionByZeroError $e1){
  echo $e->getMessage()."<br><br>";
}
 ?>
