<?php
session_start();
$conn=mysqli_connect('localhost','root','','savelife');
 
$m=$_SESSION['user'];
$newpass=$_POST['pass2'];
$mno=$_POST['mno'];
$sex=$_POST['r'];
$street=$_POST['street'];
$area=$_POST['area'];
$city=$_POST['city'];
$state=$_POST['state'];
$pincode=$_POST['pincode'];
$country=$_POST['country'];



$g=mysqli_query($conn,"UPDATE donorrregistration SET  password1 ='$newpass',
		 mobile ='$mno',sex ='$sex' ,street='$street',area='$area', city='$city',state='$state',pincode='$pincode',country='$country' WHERE email = '$m'");
		 if($g)
		 {
		 $_SESSION['pass']=$newpass;
		header('location:index.php');
		 }

?>