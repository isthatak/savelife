  <?php
			 
		 $d_id=$_GET['donerid'];
		 echo $d_id;
		 $conn=mysqli_connect('localhost','root','','savelife');
		  
		 $p=mysqli_query($conn,"select * from donorregistration where id=$d_id");
		 while($row=mysqli_fetch_array($p))
		 {
			 $name=$row['name'];
			 $lname=$row['lastname'];
			 $email=$row['email'];
			 $mobile=$row['mobile'];
			 $sex=$row['sex'];
			 $country=$row['country'];
			 $city=$row['city'];
			 $area=$row['area'];
			 $street=$row['street'];
			 $ld=$row['lastdonate'];
			 echo $name;
			 
			 
			 
			 
			 
			 }
		 ?>
         