<?php

$q=$_GET["q"];
$conn=mysqli_connect('localhost','root','','savelife');
	 
	$sql="SELECT * FROM city WHERE state = '".$q."'";
	$rs=mysqli_query($conn,$sql);
	
	echo "<select name='city' style='height:30px;margin-top:20px; width:200px;box-shadow: 4px 4px 5px #888888'>
	<option value=''>Select City</option>";
	while($row=mysqli_fetch_array($rs))
	{
		$c=$row['city_name'];
		echo "<option value='$c'>".$c."</option>";
	}
	echo "</select>";
?>