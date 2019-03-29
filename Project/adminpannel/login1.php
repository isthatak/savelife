<?php
 
    session_start();
   if (isset($_SESSION['username']) && ($_SESSION['password'])) 
   {
header('Location: adhome.php');
}
else
{
	header('Location: login.php');
	}

// Check, if username session is NOT set then this page will jump to login page



?>