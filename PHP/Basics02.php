<form  action="Basics02.php" method="get"><!--Use method "POST" to not to display information in URL-->
  Username:<input type="text" name="uname"/>
</form>


<?php
//USER INPUT-GET
   echo $_GET["uname"];
   echo "<br>";
   echo $_GET["age"]."<br>";
   echo "You can set the 'age' varible in URL<br><br>";



   //A S S O C I A T I V E   A R R A Y S
   $testGrades = array(
     "Andy" =>"b+",
     "Stanley"=>"c",
     "John" => 'A',
     3 => 95.2
   );
   echo $testGrades["Andy"]."<br>";
   echo $testGrades["John"].'<br>';
   echo $testGrades[3]."<br><br>";

   //F U N C T I O N S
   function addNumbers($num1,$num2=99){
     return $num1+$num2;
   }
   $sum = addNumbers(12,14);
   $sum2 = addNumbers(13);

   echo "$sum,$sum2<br><br>";

   //I F   S T A T E M E N T S
   $isStudent = true;
   $isTall = false;

   if($isStudent && $isTall){
     echo "You are a tall student";
   }
   elseif($isStudent && !$isTall){
     print "You are a student.<br><br>";
   }
   else {
     print("you are tall");
   }

   if(1<3){
     print "number comparisons true<br><br>";
   }
   if("dog"=="cat")
      echo("String comparisons was true");

  //S W I T C H   S T A T E M E N T S
  $myGrade = "A";
  switch($myGrade){
    case "A":
    echo "You are pass<br><br>";break;
    case "F":
    echo "you are fail";break;
    default:
    echo "Invalid grade";

  }

  //W H I L E   l O O P S
  $index = 1;
  while($index<5){
    echo "$index,";
    $index++;
  }
  do{
    $index--;
    echo "$index,";
  }while($index>1);
echo "<br>";
  //F O R   L O O P
  for($i=0;$i<5;$i++){
    print "$i,";
  }
  echo "<br>";

  $lucky_numbers = [4,8,"fifteen",16,23,42.0];
  foreach($lucky_numbers as $l){
    print "$l,";
  }
  echo "<br><br>";
?>
