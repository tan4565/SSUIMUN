<?php
echo $_POST["Fname"];
echo $_POST["Gender"];
echo $_POST["Email"];
echo $_POST["Mno"];
echo $_POST["WMno"];
echo $_POST["city"];
echo $_POST["nationality"];
echo $_POST["institute"];
echo $_POST["exp"];
echo $_POST["committee1"];
echo $_POST["country1"];
echo $_POST["committee2"];
echo $_POST["country2"];
echo $_POST["rules"];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ssuimun";

$rfnm=$_POST["Fname"];
$rgender=$_POST["Gender"];
$remail=$_POST["Email"]; 
$rMno=$_POST["Mno"];
$rWMno=$_POST["WMno"];
$rcity=$_POST["city"];
$rnationality=$_POST["nationality"];
$rinstitute=$_POST["institute"];
$rexp=$_POST["exp"];
$rcommittee1=$_POST["committee1"];
$rcountry1=$_POST["country1"];
$rcommittee2=$_POST["committee2"];
$rcountry2=$_POST["country2"];
$rrules=$_POST["rules"];
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


$sql = "INSERT INTO payment (Fname,	Gender,Email,Mno,WMno,City,Nationality,Institute,Exp,committee_1,country_1,committee_2,country_2,rules)
VALUES ('$rfnm','$rgender','$remail','$rMno','$rWMno','$rcity','$rnationality','$rinstitute','$rexp','$rcommittee1','$rcountry1','$rcommittee2','$rcountry2','$rrules')";


if ($conn->query($sql) === TRUE) {
   echo header("Location: https://www.payumoney.com/paybypayumoney/#/63D7606CC67E3C19B6F25C0185966341");
exit();
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>