<?php

include 'db.php';
$g=$_POST['uname'];
$m=$_POST['oldpass'];
//echo "$m";
$h=$_POST['newpass'];
$result=mysqli_query($conn,"select password from adpassword where username='$g'");
while($test = mysqli_fetch_array($result))
{
	
	$id = $test['0'];
echo "$id";		
	}
	//echo "$id";
//echo "$m";
//echo "$id";		

if(strcmp($m,$id)==0)
{

mysqli_query($conn,"UPDATE adpassword  SET password='$h' where username='$g'")or die(mysql_error()); 
echo"password has been change";
 header('Location: adhome.php');
}
else
{
	echo "please provide your correct old password";
	
	}
?>