<?php
if (isset($_POST['submit']))
	{	   
	include 'db.php';
	
			 		$title=$_POST['id'] ;
					$author= $_POST['heading'] ;					
					$name=$_POST['des'] ;
					$copy=$_POST['date'] ;
												
		 mysqli_query($conn,"INSERT INTO `news`(id,heading,description,date) 
		 VALUES ('$title','$author','$name','$copy')"); 
				
				
	        }
?>