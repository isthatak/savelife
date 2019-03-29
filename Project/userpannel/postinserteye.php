<?php
session_start();

$conn=mysqli_connect('localhost','root','','savelife');
 
$hospital=$_POST['hospital'];
$region=$_POST['region'];
$id=$_SESSION['d_id'];
$usermail=$_SESSION['user'];
$a=mysqli_query($conn,"select * from userregistration where email='$usermail' ");
while($row=mysqli_fetch_array($a))
{
$user_id=$row['id'];

}
$b=mysqli_query($conn,"insert into request (u_id,d_id,hospital,region,status,type) values('$user_id','$id','$hospital','$region','0','Eye')");
if($b)
{


header("location:searhceye.php");
}
unset($session['d_id']);



?>