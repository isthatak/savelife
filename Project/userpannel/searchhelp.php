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
       
        <li ><a href="profileupdate.php" class="parent"><span>Profile update here</span></a></li>
          <li ><a href="#" class="parent"><span>View donors</span></a> <ul>
                <li><a href="viewblood.php" class="parent"><span>Blood</span></a>
             
                </li>
                <li><a href="vieweye.php" class="parent"><span>Eye</span></a>
                    
                </li>
                <li><a href="viewhelp.php" class="parent"><span>Help</span></a>
                    
                </li>
                 
            </ul></li>
         <li><a href="#" class="parent"><span>Post & Search </span></a>
            <ul>
                <li><a href="searchblood.php" class="parent"><span>Blood</span></a>
             
                </li>
                <li><a href="searcheye.php" class="parent"><span>Eye</span></a>
                    
                </li>
                <li><a href="searchhelp.php" class="parent"><span>Help</span></a>
                    
                </li>
                 
            </ul>
        </li>
        <li ><a href="changepass.php" class="parent"><span>Change password</span></a></li>
                <li ><a href="news&events.php" class="parent"><span>News&events</span></a></li>
        <li class="last"><a href="logout.php"><span>Logout</span></a></li>
    </ul>

  </div>
    <div id="main">
   
      <p class="w1">Search Help  here!!</p>
      <p class="userpannel"><?php echo $_SESSION['uname']; ?></p><br />
     <p class="userpannel"><?php echo $_SESSION['user']; ?></p><p>&nbsp;</p>
  
    <form name="store" method="POST" action="shelp.php">
      <div class="con" id="con">
     
      
        <div class="searchcontent">
          <div class="searchf">
          <strong><o1>Country</o1></strong><br />
    <select name="country" style="width:250px; height:30px">
<option value="">Select Country</option>
<?php
	$conn=mysqli_connect('localhost','root','','savelife');
	 
	$sql="select * from countries";
	$rs=mysqli_query($conn,$sql);
	while($row=mysqli_fetch_array($rs))
	{
		$c=$row['countryName'];
		echo "<option value='$c'>".$c."</option>";
	}
?>
   
</select>
          
          </div>
          <div class="searchs">
                    <strong><o1>State</o1></strong><br />
                    <select name="state" style="width:250px; height:30px;" onchange="showUser(this.value)">
<option value="">Select State</option>
<?php
	$sql="select * from state";
	$rs=mysqli_query($conn,$sql);
	while($row=mysqli_fetch_array($rs))
	{
		$c=$row['statenm'];
		echo "<option value='$c'>".$c."</option>";
	}
?>
</select>
    
          
          </div>
          
        
       
        </div>
        <div class="searchcontent">
          <div class="searchf" id="txtHint">
          <strong>
          <o1>City</o1></strong><br />
          </div>
        </div>
        <input type="submit" name="pb" value="Search" onclick="return validateForm()" style="height:30px; width:200px;box-shadow: 4px 4px 5px #888888; margin-left:330px" />
        
      </div>
      </form>
       /*here php code for fetching form database and  fetch only blood group and name and write link click here for more details */
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