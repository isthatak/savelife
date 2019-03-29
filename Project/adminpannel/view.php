<html>
<title>
FORM
</title>

</head>
<body bgcolor="lightgray">
<table border="1" width="1000" height="200"align="center" bgcolor="blue" color="white" >
<tr>
<td   align="center" colspan="5"><h1>
<font color="#FF0000">
ADMIN LOGIN FORM
</font></h1>
</td>
</tr>
<tr>
<td align="center" bgcolor="#FFFFFF"><a href="adhome.php"> </a></td>
       
        <td align="center" bgcolor="#FFFFFF"><a href="aboutus.html" class="menu">About Us</a> </td>
		
		<td align="center" bgcolor="#FFFFFF"><a href="offering.html" class="menu">Our Services</a></td>
		
		<td align="center" bgcolor="#FFFFFF"><a href="customer.html" class="menu">Customers</a></td>
        
        <td align="center" bgcolor="#FFFFFF"><a href="careers.html" class="menu">Careers</a></td></tr>
</table>
<?php



require("db.php");
$id =$_REQUEST['id'];

$result = mysqli_query($conn,"SELECT * FROM news WHERE id  = '$id'");
$test = mysqli_fetch_array($result);
if (!$result) 
		{
		die("Error: Data not found..");
		}
				$Title=$test['id'] ;
				$Author= $test['heading'] ;					
				$PublisherName=$test['description'] ;
				$CopyrightYear=$test['date'] ;

if(isset($_POST['save']))
{	
	$title_save = $_POST['id'];
	$author_save = $_POST['heading'];
	$name_save = $_POST['des'];
	$copy_save = $_POST['date'];

	mysqli_query($conn,"UPDATE news SET id ='$title_save', heading ='$author_save',
		 description ='$name_save',date ='$copy_save' WHERE id = '$id'")
				or die(mysql_error()); 
	echo "Saved!";
	
	header("Location: adhome.php");			
}
mysqli_close($conn);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body bgcolor="#CCCCCC">
<form method="post">
<table align="center" border="1" bgcolor="#999999" width="1000" height="500">
<tr>
<td colspan="2" align="center" FONT-COLOR="RED">EDIT NEWS</td>
</tr>
	<tr>
		<td align="center">id:</td>
		<td align="center"><input type="text" width="150" height="4"  name="id" value="<?php echo $Title ?>"/></td>
	</tr>
	<tr>
		<td align="center">Heading</td>
		<td align="center"><input type="text" name="heading" value="<?php echo $Author ?>"/></td>
	</tr>
	<tr>
		<td align="center">Description</td>
		<td align="center"><textarea rows="5" name="des" cols="40" name="name" value="<?php echo $PublisherName ?>"/></textarea></td> 
	</tr>
	<tr>
		<td align="center">Date Year</td>
		<td align="center"><input type="text" name="date" value="<?php echo $CopyrightYear ?>"/></td>
	</tr>
	<tr>
		
		<td align="center" colspan="2"><input type="submit" name="save" value="save" /></td>
	</tr>
</table>

</body>
</html>

