<?php

$q=$_GET["q"];
$conn=mysqli_connect('localhost','root','','savelife');
	 
	$sql="SELECT * FROM city WHERE state = '".$q."'";
	$rs=mysqli_query($conn,$sql);
	
	echo "<select name='city' style='width:250px;margin-top:20px; height:30px;'>
	<option value=''>Select City</option>";
	while($row=mysqli_fetch_array($rs))
	{
		$c=$row['city_name'];
		echo "<option value='$c'>".$c."</option>";
	}
	echo "</select>";
?>