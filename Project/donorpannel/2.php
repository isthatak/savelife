<?php


session_start();
$conn=mysqli_connect('localhost','root','','savelife');
 
$c=$_SESSION['user'];

$donor=mysqli_query($conn,"select * from donorregistration where email='$c'");
while($row=mysqli_fetch_array($donor))
{
$w=$row['id'];
}
$c=0;
$p=mysqli_query($conn,"select * from request where u_id='$w'");
while($fd=mysqli_fetch_array($p))
{

$roll= $fd['u_id'];
$hos=$fd['hospital'];
$reg=$fd['region'];

$sql="select * from userregistration where id='$roll'";
$rs=mysqli_query($conn,$sql);


while($room=mysqli_fetch_array($rs))
{

$name1=$room['name'];
$state1=$room['state'];
$city1=$room['city'];
$bloodgrp=$room['bloodgroup'];
$sex=$room['sex'];
echo $name1;
echo "<table cellpadding='3' cellspacing='1' border='0' width='100%'>
        <tbody><tr bgcolor='#E5DED1'>";
          echo"<td height='20' width='120'><div align='center'><strong>".$name1."</strong></div></td>";
          echo"<td height='20' width='120'><div align='center'><strong>".$state1."</strong></div></td>";
          echo"<td width='120'><div align='center' ><strong>".$city1."</strong></div></td>";
           echo"<td width='80'><div align='center'><strong>".$bloodgrp."</strong></div></td>";
           echo"<td width='80'><div align='center'><strong>".$hos."</strong></div></td>";
		   echo"<td width='80'><div align='center'><strong>".$reg."</strong></div></td>";
           
			
			
         
          
         
         
          
        echo"</tr>
        </tbody></table>";
}



}





?>
