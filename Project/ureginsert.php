<?php
session_start();

$conn=mysqli_connect("localhost","root","",'savelife');
 

$a=$_POST['fn'];
$b=$_POST['ln'];
$c=$_POST['email'];
$d=$_POST['pass1'];
$e=$_POST['mno'];
$f=$_POST['r'];
$g=$_POST['street'];
$h=$_POST['area'];
$i=$_POST['city'];
$j=$_POST['state'];
$k=$_POST['pincode'];
$l=$_POST['country'];
$m=$_POST['bgroup'];

$s="select * from userregistration where email='$c'";
$t=mysqli_query($conn,$s);

while($row=mysqli_fetch_array($t))
{
$u=count($row['0']);
}
if($u>0)
{
	
header('location:uemailallready.php');
	
}
else
{
$_SESSION['uname']=$a;
$_SESSION['user']=$c;
$_SESSION['pass']=$d;


$w="insert into userregistration(name,lname,email,password2,mobile,sex,street,area,city,state,pincode,country,bloodgroup)values('$a','$b','$c','$d','$e','$f','$g','$h','$i','$j','$k','$l','$m')";
$qa=mysqli_query($conn,$w);
header('Location:userpannel/index.php');


}



?>