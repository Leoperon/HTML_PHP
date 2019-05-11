<?php
$name=$_POST['Name'];
$email=$_POST['Email'];
$msg=$_POST['Message'];
$to="fruitioncore@gmail.com";//my gmail
$subject="Query by User";
$header="From: $email";
$sub="Thanks for Contracting  Us";
$head="From : $to";
$m="We will get back to you shortly";
/*Connecting to Database*/
$ip="localhost";
$user="";key(array)
$pass="freak";//my database password
$dbname="";
/*END*/

$connect= mysqli_connect($ip,$user,$pass,$dbname);

if(mysqli_connect_error())
{
	die("Connection error"."\r\n".mysqli_connect_error());
}
$insert="INSERT INTO Contact SET Name='$name',Email='$email',Message='$msg'";
$connect->query($insert);
mail($to,$subject,$msg,$header);
mail($email,$sub,$m,$head);
header("location:index.html")
?>