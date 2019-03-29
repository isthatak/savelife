  <?php
session_start();
  $conn=mysqli_connect('localhost','root','','savelife');
   
  $country=$_POST['country'];
    $state=$_POST['state'];
	  $city=$_POST['city'];
	  $bjp= $_SESSION['bgroup'];
	  
	  $q=mysqli_query($conn,"select country,state,city,bloodgroup,name from donorregistration where country='$country' and state='$state' and city='$city' and bloodgroup='$bjp' and donortype='Blood'");
	while($row=mysqli_fetch_array($q))
	{
		$c=$row['country'];
		$s=$row['state'];
		$ci=$row['city'];
		$bg=$row['bloodgroup'];
		$name=$row['name'];

		 echo"<table cellpadding='3' cellspacing='1' border='0' width='100%'>";
        echo"<tbody><tr bgcolor='#E5DED1'>";
          echo"<td height='20' width='150'><div align='center'><strong>".$c."</strong></div></td>";
          echo"<td height='20' width='200'><div align='center'><strong>".$s."</strong></div></td>";
  	       echo"<td width='140'><div align='center' ><strong>".$ci."</strong></div></td>";
           echo"<td width='200'><div align='center'><strong>".$name."</strong></div></td>";
          echo"<td width='80'><div align='center'><strong>".$bg." </strong></div></td>";
         
          
         
         
          
       echo" </tr>
              </tbody></table>";
	}
		
		
		?>
		    
  