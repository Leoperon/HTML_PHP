<?php

$Use_Pas=$_POST['Use_Pas'];
$Use_Rep_Pas=$_POST['Use_Rep_Pas'];

//echo($Use_Nam.$Use_Eml.$Use_Mob.$Use_Pas.$Use_Rep_Pas);
if ($Use_Pas==$Use_Rep_Pas)
{
    echo "Signup Successful";
}
else
{
    echo "Password Mismatch";
}


$Use_nam=$_POST['Use_Nam'];
$Use_Mob=$_POST['Use_Mob'];
$Use_Eml=$_POST['Use_Eml'];

//echo $use_nam;
$ip="127.0.0.1";
$user="root";
$password="";
$dbname="exp1";

$path=mysqli_connect($ip,$user,$password,$dbname);
$insert="INSERT INTO table2 SET  NAME='$Use_nam',MOBILE='$Use_Mob',EMAIL_ID='$Use_Eml' ";
$path->query($insert);

?>

