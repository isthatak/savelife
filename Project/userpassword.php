	

    <?php
   
  session_start();

    $username = $_POST['username1'];
    $pass = $_POST['password1'];

	
    $conn = mysqli_connect('localhost', 'root', '','savelife')or die("uanble to connect");
   
    $query = "SELECT *
    FROM userregistration
    WHERE email = '$username' and password2='$pass'" ;
     
    $result = mysqli_query($conn,$query);
	
		while($row=mysqli_fetch_array($result))
		{
		
		$name=$row['name'];
		$c=count($row[0]);
		$password=$row['password2'];
		$db=$row['bloodgroup'];
		
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
header('location:userpannel/index.php');			
		
	}
	
	else
	{		
			
		header('location:index.php');
	}
	
	 
     
    
  
    ?>