<!DOCTYPE html>
<html>
<head>
<title>My first php file</title>
</head>
<body>




  <br>
  <br>
<form method="post" action = "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
Name: <input type="text" name="name">
<span class="error">* <?php echo $nameErr;?></span>
<br><br>
E-mail: <input type="text" name="email">
<span class="error">* <?php echo $emailErr;?></span>
<br><br>
Website: <input type="text" name="website">
<span class="error"><?php echo $websiteErr;?></span>
<br><br>
Comment: <textarea name="comment" rows="5" cols="40"></textarea>
<br><br>
Gender:
<input type="radio" name="gender" value="female">Female
<input type="radio" name="gender" value="male">Male
<input type="radio" name="gender" value="other">Other
<span class="error">* <?php echo $genderErr;?></span>
<br><br>
<input type="submit" name="submit" value="Submit">
</form>

<?php
//we first define the variables
// we add new variables to hold errod messages for each field
$nameErr = $emailErr = $genderErr = $websiteErr = "";
$name = $email=$gender= $comment=$website="";
// we check if it a post request
// then if it is we obtain a key and check if its value is empty
// if its empty store the error message in a variable
// if not we call the function on the value that takes a parameter
if($_SERVER["REQUEST_METHOD"]=="POST"){
  if (empty($_POST["name"])){
    $nameErr="Name is required";
  }else {
    $name=test_input($_POST["name"]);
  }
  if (empty($_POST["email"])){
    $emailErr="Email is required";
  }else{
    $email=test_input($_POST["email"]);
  }
  if (empty($_POST["website"])) {
    $website = "";
  } else {
    $website = test_input($_POST["website"]);
  }

  if (empty($_POST["comment"])) {
    $comment = "";
  } else {
    $comment = test_input($_POST["comment"]);
  }

  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }

}
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
echo "Study " . $_GET['subject'] . " at " . $_GET['web'];
echo "<br>";
if ($_SERVER["REQUEST_METHOD"] == "POST"){
  //Collect value input field
/*in the above form its a post request thus data is sent to file specified in the action attribute

*/
  $name=$_POST['fname'];
  if (empty($name)){
    echo "Name is empty";

  }
  else{
    echo $name;
  }
}
echo "<b>My first PHP script!</b>";
$txt = "W3Schools.com";
echo "I love " . $txt . "!";
function myTest(){
  static $x=0;// wehen you dont want a var to be deleted
  echo $x;
  $x++;
}

// we call the function

echo "<h2>PHP is fun </h2>";
echo " Hello world<br>";
echo str_replace("php","python" ,"I'm learning php");
print "I'm learning some  <br>";
$x= 5985;
var_dump($x);
$r=10.365;
var_dump($r);
$cars= array("Volvo","BWM","Toyota");
//this is how we create a constant
define("GREETING","Welcome to w3schools.com1");
// prints the value of greetings
$t=date("H");
echo "the date is  $t";
if($t<"10"){
  echo "Have a good morning ";
  }
  elseif($t <"20"){
    echo "Have a goodday";
  }
  else{
    echo "Have a goodnight";
  }

//myTest();
// creating some objects
// first we create a class to state its properties

class Car{
  function Car(){
    $this->model = "VW";
  }

}
// create an objects
$herbie= new Car();
// show the object properties
echo $herbie->model;
$favcolor="red";
switch($favcolor){
  case "red":
  echo "Your favourite color is red";
  break;
  case "blue":
  echo "your favourite color is blue";
   break;
  case "green":
  echo "Your favourite color is green";

  break;
  default:
  echo "Your favourite color is neither red,blue ,nor green!";
}

$t=6;
while($t<=5){
  echo "The number  is :$t<br>";
  $t++;
}
$d=1;
do{
  echo "The number is :$d <br>";
  $d++;
}
while ($d<=5);
$colors = array("red","green","blue","yellow");
foreach ($colors as $col){
  echo "$col <br>";
}
function msg(){
  echo "Hello World <br>";
}
msg();
// this is a function that takes in two parameters
function familyName($fname,$year){
  echo "$fname Refsnes .Born in $year <br>";

}
familyName("Jani","1890");
familyName("Stale","1920");
function setHeight($minheight = 50){
  echo "The height is : $minheight<br>";
}
setHeight();
setHeight(135);
function math($x,$y){
  $z=$x+$y;
  return $z;

}
echo math(5,7);

$vehicle=array("benz","hilux","Bwm");

echo $vehicle;
$age = array( "peter"=>"35","Ben"=>"37","joe"=>"43");
foreach($age as $x=> $x_value){
  echo ",value=". $x_value;
  echo "<br>";
}


$t = 75;
$o=25;

function add(){
  $GLOBALS['n']= $GLOBALS['t'] +$GLOBALS['o'];

}
add();
echo $n;



echo " <p> Variable x outside function is </p>;"
?>

</body>
</html>
