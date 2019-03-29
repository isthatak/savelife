<?php


session_start();
$conn=mysqli_connect('localhost','root','','savelife');
 
$c=$_SESSION['user'];

$donor=mysqli_query($conn,"select * from donorregistration where email='$c'");
while($row=mysqli_fetch_array($donor))
{
$w=$row['id'];
}
$p=mysqli_query($conn,"select * from request where d_id='$w'");
while($fd=mysqli_fetch_array($p))
{

$roll= $fd['u_id'];

$don=mysqli_query($conn,"select * from userregistration where id='$roll'");
while($room=mysqli_fetch_array($don))
{

echo$room['name'];

}



}





?>
