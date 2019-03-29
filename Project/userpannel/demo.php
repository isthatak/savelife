<?php
  $conn=mysqli_connect('localhost','root','','savelife');
   
  $country=$_POST['country'];
    $state=$_POST['state'];
	  $city=$_POST['city'];
	  echo $_SESSION['bgroup'];
	 /* $q=mysqli_query($conn,"select country,state,city,bloodgroup,name from donorregistration where country='$country' and state='$state' and city='$city' and bloodgroup='$bgroup' and type='blood'");
	while($row=mysqli_fetch_array($q))
	{
		$c=$row['contry'];
		$s=$row['state'];
		$ci=$row['city'];
		$bg=$row['bloodgroup'];
		$name=$row['name'];

		 echo"<tr>";
		echo "<td width='150px'>".$c."</td>";
		echo "<td width='200px'>".$state."</td>";
		echo "<td width='200px'>".$ci."</td>";
		echo "<td width='80px'>".$bg."</td>";
		echo "<td width='200px'>".$name."</td>";
		echo "<td>hello</td>";
		echo"</tr>"	;*/
		
		
		?>
		    
  