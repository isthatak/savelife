<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>SaveLIFE</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
<script type="text/javascript" src="jquery.js"></script>
    <script type="text/javascript" src="menu.js"></script>
<link rel="stylesheet" href="css/jquery.jcarousel.css" type="text/css" media="all" />
<!--[if IE 6]><link rel="stylesheet" href="css/ie6.css" type="text/css" media="all" /><![endif]-->
<link rel="shortcut icon" href="css/images/favicon.png" />
<link href="css/form.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/footer.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="js/jquery.jcarousel.pack.js"></script>
<script type="text/javascript" src="js/func.js"></script>
<script type="text/javascript">


	function validateForm()
{
var x=document.forms["login"]["username"].value;
var y=document.forms["login"]["password"].value;
if (x==null || x==""||y==null || y=="")
  {
  alert("First name must be filled out");
  return false;
  }
}
function showUser(str)
{
if (str=="")
  {
  document.getElementById("txtHint").innerHTML="";
  return;
  } 
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("txtHint").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","search1.php?q="+str,true);
xmlhttp.send();
}
</script>
<style type="text/css">
div#menu {
	width: 100%;
	background-color: #900D13;
	margin-top: 30px;
	margin-right: auto;
	margin-bottom: 30px;
}

</style>




</head>
<body>
<div class="shell">
  <div class="border">
    <div id="header">
      <h1 id="logo"><a href="#" class="notext">SaveLIFE</a></h1>
      <div class="socials right">
        <ul>
          <li><a href="#" class="rss">RSS</a></li>
          <li><a href="#" class="fb">Facebook</a></li>
          <li class="last"><a href="#" class="twit">Twitter</a></li>
        </ul>
      </div>
      <div class="cl">&nbsp;</div>
    </div>
    <div id='menu'>
  	<ul class="menu">
    	<li ><a href="index.php" class="parent"><span>Home</span></a></li>
       
        <li ><a href="pupdate.php" class="parent"><span>Update Profile  </span></a></li>
        <li><a href="#" class="parent"><span>Request here</span></a>
           <ul>
               <li><a href="sblood.php" class="parent"><span>Blood</span></a>
             
               </li>
               <li><a href="seye.php" class="parent"><span>Eye</span></a>
                    
               </li>
               <li><a href="shelp.php" class="parent"><span>Help</span></a>
                    
               </li>
                 
          </ul>
        </li>
        <li ><a href="changepass.php" class="parent"><span>Change password</span></a></li>
                
        <li class="last"><a href="logout.php"><span>Logout</span></a></li>
    </ul>

  </div>
    <div id="main">
   
      <p class="w1">Hi Donor your request here!!</p>
       <p class="userpannel"><?php echo $_SESSION['uname']; ?></p><br />
     <p class="userpannel"><?php echo $_SESSION['user']; ?></p><p>&nbsp;</p>
    
  
    <table cellpadding="3" cellspacing="1" border="0" width="100%">
        <tbody><tr bgcolor="#E5DED1">
          <td height="20" width="120"><div align="center"><strong>Seeker name</strong></div></td>
          <td height="20" width="120"><div align="center"><strong>State</strong></div></td>
          <td width="120"><div align="center" ><strong>City</strong></div></td>
           <td width="80"><div align="center"><strong>Blood group</strong></div></td>
          <td width="70"><div align="center"><strong>SEX</strong></div></td>
            <td width="140"><div align="center"><strong>Hospital</strong></div></td>
         
          
         
         
          <td width="80"><div ><strong>Region</strong></div></td>
           <td width="80"><div align="center"><strong>Request</strong></div></td>
            <td width="70"><div align="center"><strong>status</strong></div></td>
        </tr>
        </tbody></table>
       <?php



$conn=mysqli_connect('localhost','root','','savelife');
 
$c=$_SESSION['user'];

$donor=mysqli_query($conn,"select * from donorregistration where email='$c'");
while($row=mysqli_fetch_array($donor))
{
$w=$row['id'];
}
$c=0;
$p=mysqli_query($conn,"select * from request where d_id='$w' and status='UNSEEN' and type='Blood'");

while($fd=mysqli_fetch_array($p))
{

$roll= $fd['u_id'];
$hos=$fd['hospital'];
$reg=$fd['region'];
$reqid=$fd['id'];
$sts=$fd['status'];

	

$sql="select * from userregistration where id='$roll'";
$rs=mysqli_query($conn,$sql);


while($room=mysqli_fetch_array($rs))
{
$dbn=$room['id'];
$name1=$room['name'];
$state1=$room['state'];
$city1=$room['city'];
$bloodgrp=$room['bloodgroup'];
$sex=$room['sex'];

echo "<table cellpadding='3' cellspacing='1' border='0' width='100%'>
        <tbody><tr bgcolor='#E5DED1'>";
          echo"<td height='20' width='120'><div align='center'><strong>".$name1."</strong></div></td>";
          echo"<td height='20' width='120'><div align='center'><strong>".$state1."</strong></div></td>";
          echo"<td width='120'><div align='center' ><strong>".$city1."</strong></div></td>";
           echo"<td width='80'><div align='center'><strong>".$bloodgrp."</strong></div></td>";
           echo"<td width='70'><div align='center'><strong>".$sex."</strong></div></td>";
		   echo"<td width='140'><div align='center'><strong>".$hos."</strong></div></td>";
		     echo"<td width='80'><div align='center'><strong>".$reg."</strong></div></td>";
			
			  echo"<td align='center'width='80'><div ><a href ='accept.php?d_id=$reqid'><center><sd>Accept</sd></center></a>";
			   echo"<td align='center' width='70' ><div><strong>".$sts."</strong></div></td>";
           
			
			
         
          
         
         
          
        echo"</tr>
        </tbody></table>";
}



}





?>
 <p class="w1">Hi Donor you Accepted here!!</p>
  <table cellpadding="3" cellspacing="1" border="0" width="100%">
        <tbody><tr bgcolor="#E5DED1">
          <td height="20" width="120"><div align="center"><strong>Seeker name</strong></div></td>
          <td height="20" width="120"><div align="center"><strong>State</strong></div></td>
          <td width="120"><div align="center" ><strong>City</strong></div></td>
           <td width="80"><div align="center"><strong>Blood group</strong></div></td>
          <td width="70"><div align="center"><strong>SEX</strong></div></td>
            <td width="140"><div align="center"><strong>Hospital</strong></div></td>
         
          
         
         
          <td width="80"><div ><strong>Region</strong></div></td>
           <td width="80"><div align="center"><strong>Request</strong></div></td>
            <td width="70"><div align="center"><strong>status</strong></div></td>
        </tr>
        </tbody></table>
       <?php



$conn=mysqli_connect('localhost','root','','savelife');
 
$c=$_SESSION['user'];

$donor=mysqli_query($conn,"select * from donorregistration where email='$c'");
while($row=mysqli_fetch_array($donor))
{
$w=$row['id'];
}
$c=0;
$p=mysqli_query($conn,"select * from request where u_id='$w' and status='SEEN' and type='Blood'");
while($fd=mysqli_fetch_array($p))
{

$roll= $fd['u_id'];
$hos=$fd['hospital'];
$reg=$fd['region'];
$reqid=$fd['id'];
$sts=$fd['status'];

	

$sql="select * from userregistration where id='$roll'";
$rs=mysqli_query($conn,$sql);


while($room=mysqli_fetch_array($rs))
{
$dbn=$room['id'];
$name1=$room['name'];
$state1=$room['state'];
$city1=$room['city'];
$bloodgrp=$room['bloodgroup'];
$sex=$room['sex'];

echo "<table cellpadding='3' cellspacing='1' border='0' width='100%'>
        <tbody><tr bgcolor='#E5DED1'>";
          echo"<td height='20' width='120'><div align='center'><strong>".$name1."</strong></div></td>";
          echo"<td height='20' width='120'><div align='center'><strong>".$state1."</strong></div></td>";
          echo"<td width='120'><div align='center' ><strong>".$city1."</strong></div></td>";
           echo"<td width='80'><div align='center'><strong>".$bloodgrp."</strong></div></td>";
           echo"<td width='70'><div align='center'><strong>".$sex."</strong></div></td>";
		   echo"<td width='140'><div align='center'><strong>".$hos."</strong></div></td>";
		     echo"<td width='80'><div align='center'><strong>".$reg."</strong></div></td>";
			
			  echo"<td align='center'width='80'><div ><strong>accepted</strong></div>";
			   echo"<td align='center' width='70' ><div><strong>SEEN</strong></div></td>";
           
			
			
         
          
         
         
          
        echo"</tr>
        </tbody></table>";
}



}





?>
  
     	<div class="shadow-b"></div>
       
    </div>
    <div class="wrapper">

  <div id="footer">
    <div class="verticaline clear">
      <div class="box size1">
        <h2>Keep in Touch</h2>
        <h2><a href="#"><img src="css/images/rss.gif" alt="" width="214" height="86" /></a></h2>
      </div>
      <div class="box size2">
        <address>
        <strong class="title">Company Name</strong><br />
        SaveLife Help to indian<br />
        india<br />
        Society for help
        </address>
        <address>
<strong class="title">Tel:</strong><br />
        9828647609
        </address>
        <ul>
          <li><strong class="title">Email:</strong><br />
          <a href="#">grvpandya0@gmail.com</a></li>
        </ul>
      </div>
      <div class="box size3">
        <ul>
          <li><span>Facebook:</span> <a href="http://www.facebook.com">www.facebook.com</a></li>
          <li></li>
        </ul>
        <form action="sendmessage.php" name="footer" method="post">
          <fieldset>
            <legend>query !            </legend>
            <p>&nbsp;</p>
            </br>
            <p>
              <input type="text" name="email" id="message" value="Enter Email Here&hellip;" onfocus="this.value=(this.value=='Enter Email Here&hellip;')? '' : this.value ;" /> 
              <textarea rows="3" cols="60" name="message" id="mes" value="Enter message here !" onfocus="this.value=(this.value=='Enter message here !')? '' : this.value ;" ></textarea>
            </p>
            <p>&nbsp;</p>
            <p>
              <input type="image" id="subscribe" src="css/images/submit.gif" alt="Submit" /> 
            </p>
           
          </fieldset>
        </form>
       
        <p class="title">&nbsp;</p>
        <p class="title">Copyright &copy; 2014-grvpandya0@gmail.com</p>
      </div>
    </div>
  </div>
</div>





    </div>
    
</div>



</body>
</html>