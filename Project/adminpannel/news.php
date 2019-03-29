<?php
 session_start();
?>
<html>
<title>
FORM
</title>

</head>
<body bgcolor="lightgray">
<table border="1" width="1000" height="200"align="center" bgcolor="blue" color="white" >
<tr>
<td   align="center" colspan="5">
<h1 f>SaveLife</h1>
<h1>
<font color="#FF0000">
ADMIN LOGIN FORM
</font></h1>
</td>
</tr>
<tr>
<td align="center" bgcolor="#FFFFFF"><a href="adhome.php">NEWS</a></td>
       
        <td align="center" bgcolor="#FFFFFF"><a href="aboutus.html" class="menu">View donar</a> </td>
		
		
		<td align="center" bgcolor="#FFFFFF"><a href="aboutus.html" class="menu">adds</a> </td>

		<td align="center" bgcolor="#FFFFFF"><a href="customer.html" class="menu"></a></td>
        
        <td align="center" bgcolor="#FFFFFF"><a href="careers.html" class="menu">	show message</a></td></tr>
</table>
<form method="post">
<table align="center">

	<tr>
		<td>NO</td>
		<td><input type="text" name="id" /></td>
	</tr>
	<tr>
		<td>NEWS heading</td>
		<td><input type="text" name="heading" /></td>
	</tr>
	<tr>
		<td>Description</td>
		<td><textarea rows="5" name="des" cols="40" name="des" /></textarea></td>
	</tr>
	<tr>
		<td>Date</td>
		<td><input type="text" name="date" /></td>
	</tr>
	<tr>
		<td>&nbsp;</td>
		<td><input type="submit" name="submit" value="add" /></td>
	</tr>
</table>

<?php



		   
	include 'db.php';
	$result=mysqli_query($conn,"SELECT COUNT(id)  FROM news");

// Query to select an int column


$row = mysqli_fetch_row($result);
$num=$row[0];

	if($num==0)
	{
	$id=1;
	
	}
	else
	{
	
	$id=$num+1;
	}
												
	
	

if (isset($_POST['submit']))
	{	   
	include 'db.php';
	
			 		$title=$id ;
					$author= $_POST['heading'] ;					
					$name=$_POST['des'] ;
					$copy=$_POST['date'] ;
												
		 mysqli_query($conn,"INSERT INTO `news`(id,heading,description,date) 
		 VALUES ('$title','$author','$name','$copy')"); 
				
				
	        }
?>

 
</form>
<table border="1" width="1000" align="center">
	
			<?php
			include("db.php");
			
				
			$result=mysqli_query($conn,"SELECT * FROM news");
			
			while($test = mysqli_fetch_array($result))
			{
				$id = $test['id'];	
				
				echo "<tr align='center'>";	
				echo"<td><font color='black'>" .$test['id']."</font></td>";
			 	echo"<td><font color='black'>" .$test['heading']."</font></td>";
				echo"<td><font color='black'>". $test['description']. "</font></td>";
				echo"<td><font color='black'>". $test['date']. "</font></td>";
				
				echo"<td> <a href ='view.php?id=$id'>Edit</a>";
				echo"<td> <a href ='del.php?id=$id'><center>Delete</center></a>";
									
				echo "</tr>";
			}
			mysqli_close($conn);
	
			?>


</table>

<td>&nbsp;

</td>
</tr></table>
<table align="center" bgcolor="#0033FF" height="100" width="1200" >



<tr>
<td align="right"><a href="logout.php"><font color="#FFFFFF">logout</font></a>
</td>
</tr>
<tr>
<td align="center"><a href="rename.php"><h4><font color="#FFFFFF">change password here !</font></h4></a>

</td>
</tr>
</table>

</body>
</html>
