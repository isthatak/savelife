	

    <?php
   
  session_start();

    $username = $_POST['dname'];
    $pass = $_POST['dpassword'];

	
    $conn = mysqli_connect('localhost', 'root', '','savelife')or die("uanble to connect");

    $query = "SELECT *
    FROM donorregistration
    WHERE email = '$username' and password1='$pass'" ;
     
    $result = mysqli_query($conn,$query);
	
		while($row=mysqli_fetch_array($result))
		{
		
		$name=$row['name'];
		$c=count($row[0]);
		$db=$row['bloodgroup'];
		$password=$row['password1'];
		}
		if($c>0)
	{
			$_SESSION['uname']=$name;
			$_SESSION['user']=$username;
			$_SESSION['pass']=$password;
			$_SESSION['bgroup']=$db;
			
			echo $_SESSION['uname'];echo"<br>";
			echo $_SESSION['user'];echo"<br>";
			echo $_SESSION['pass'];
header('location:donorpannel/index.php');			
		
	}
	
	else
	{		
			
		header('location:index.php');
	}
	
	 
     
    
  
    ?>