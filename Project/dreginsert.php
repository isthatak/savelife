<?php
$conn=mysqli_connect("localhost","root","",'savelife');
 
if(move_uploaded_file($_FILES["certificate"]["tmp_name"],"upload/".$_FILES["certificate"]["name"]))
{
	$ph=$_FILES["certificate"]["name"];
	}
$a=$_POST['fn'];
$b=$_POST['ln'];
$c=$_POST['email'];
$d=$_POST['pass2'];
$e=$_POST['mno'];
$f=$_POST['r'];
$g=$_POST['street'];
$h=$_POST['area'];

$i=$_POST['city'];
$j=$_POST['state'];
$k=$_POST['pincode'];
$l=$_POST['country'];
$m=$_POST['bgroup'];
$n=$_POST['type'];
$o=$_POST['when'];
$date=date('Y/m/D');

$s="select * from donorregistration where email='$c'";
$t=mysqli_query($conn,$s);

while($row=mysqli_fetch_array($t))
{
$u=count($row['0']);
}
if($u>0)
{
	
header('location:demailallready.php');
	
}
else
{


$w="insert into donorregistration(name,lastname,email,password1,mobile,sex,street,area,city,state,pincode,country,bloodgroup,donortype,certificate,when1,lastdonate)values('$a','$b','$c','$d','$e','$f','$g','$h','$i','$j','$k','$l','$m','$n','$ph','$o','2014/01/2')";
$qa=mysqli_query($conn,$w);
header('Location:donorlogin.php');


}



?>