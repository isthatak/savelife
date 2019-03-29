	

    <?php
   
  session_start();

    $username = $_POST['username'];
	//$email=$_POST['email'];
    $password = $_POST['password']; 
    $conn = mysqli_connect('localhost', 'root', '','savelife')or die("uanble to connect");
 
     
    //$username = mysql_real_escape_string($username);
    $query = "SELECT *
    FROM adpassword
    WHERE email_id = '$username' and password='$password'" ;
    
	echo $query;
    $result = mysqli_query($conn,$query);
	$c=0;
	
	while($row=mysqli_fetch_array($result))
	{
		$c++;
	}
	if($c>0)
	{
		header('location:adhome.php');
	}
	
	else
	{
		//header('location:login.php');
	}
	
    ?>