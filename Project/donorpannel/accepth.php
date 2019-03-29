<?php
session_start();
$conn=mysqli_connect('localhost','root','','savelife');
 
$a=$_GET['d_id'];


$p=mysqli_query($conn,"update request SET status='SEEN' where id=$a and type='Help'");
echo $p;
if($p);
{
header('location:sblood.php');
}


?>