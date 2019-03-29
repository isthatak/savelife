	

    <?php
   
  session_start();

    $username = $_POST['username1'];
    $pass = $_POST['password1'];

	
    $conn = mysql_connect('localhost', 'root', '')or die("uanble to connect");
    mysql_select_db('savelife', $conn)or die("uanble to connect");
    $query = "SELECT *
    FROM userregistration
    WHERE email = '$username' and password2='$pass'" ;
     
    $result = mysql_query($query);
	
		while($row=mysql_fetch_array($result))
		{
		
		$name=$row['name'];
		$c=count($row[0]);
		
		}
		if($c>0)
	{
			$_SESSION['uname']=$name;
			$_SESSION['user']=$username;
			$_SESSION['pass']=$password;
			echo $_SESSION['uname'];echo"<br>";
			echo $_SESSION['user'];echo"<br>";
			echo $_SESSION['pass'];
header('location:index.php');			
		
	}
	
	else
	{		
			
		header('location:newfolder(2)/index.php');
	}
	
	 
     
    
  
    ?>