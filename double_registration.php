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
echo $_POST["Co_Fname"];
echo $_POST["Co_Gender"];
echo $_POST["Co_Email"];
echo $_POST["Co_Mno"];
echo $_POST["Co_city"];
echo $_POST["Co_nationality"];
echo $_POST["Co_institute"];
echo $_POST["Co_exp"];
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
$rCo_fnm=$_POST["Co_Fname"];
$rCo_gender=$_POST["Co_Gender"];
$rCo_email=$_POST["Co_Email"]; 
$rCo_Mno=$_POST["Co_Mno"];
$rCo_city=$_POST["Co_city"];
$rCo_nationality=$_POST["Co_nationality"];
$rCo_institute=$_POST["Co_institute"];
$rCo_exp=$_POST["Co_exp"];
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


$sql = "INSERT INTO payment (Fname,	Gender,Email,Mno,WMno,City,Nationality,Institute,Exp,Co_Fname,Cogender,Co_Email,Comno,Cocity,Conationality,Coinstitute,co_exp,committee_1,country_1,committee_2,country_2,rules)
VALUES ('$rfnm','$rgender','$remail','$rMno','$rWMno','$rcity','$rnationality','$rinstitute','$rexp','$rCo_fnm','$rCo_gender','$rCo_email','$rCo_Mno','$rCo_city','$rCo_nationality','$rCo_institute','$rCo_exp','$rcommittee1','$rcountry1','$rcommittee2','$rcountry2','$rrules')";


if ($conn->query($sql) === TRUE) {
   echo header("Location: https://www.payumoney.com/paybypayumoney/#/1569830E738354725B012C11686A4125");
exit();
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>