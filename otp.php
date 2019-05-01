<?php
{
   $Usr_id=$_POST['Usr_Mob'];
 
	$ip='127.0.0.1';
	$user='root';
	$password='';
	$db_name='exp1';

    $otp=rand(100,999);
	$connection=mysqli_connect($ip,$user,$password,$db_name);


	$result=($connection->query("SELECT * FROM table2 where EMAIL_ID='$Usr_id' or MOBILE='$Usr_id'"));
	$num=mysqli_fetch_array($result);

	$id=$num['id'];

	$update="UPDATE table2 set otp='$otp' where EMAIL_ID='$Usr_id' or MOBILE='$Usr_id'";
	echo("$otp");
	$connection->query($update);
    
}
?>