<?php
$e=$_POST['email'];
$m=$_POST['message'];
include "db.php";
mysqli_query($conn,"insert into message (m_id,email,message) values('','$e','$m')");

?>
<html>
<head>
<script>
alert("message has been send");
<?php   header("Location: index.php");		      ?>
</script>
</head>
</html>

