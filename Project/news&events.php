<?Php
$conn = mysqli_connect('localhost', 'root', '','savelife')or die("uanble to connect");
  
	$result=mysqli_query($conn,"SELECT COUNT(id)  FROM news");

// Query to select an int column


$row = mysqli_fetch_row($result);
$num=$row[0];
$m1=mysqli_query($conn,"select description from news where id=$num-0");
$n1=mysqli_fetch_array($m1);

	
	//echo "$n1[0]";
$m2=mysqli_query($conn,"select description from news where id=$num-2");
$n2=mysqli_fetch_array($m2);

	
	//echo "$n2[0]";
	$m3=mysqli_query($conn,"select description from news where id=$num-3");
$n3=mysqli_fetch_array($m3);

	
	//echo "$n3[0]";
$m4=mysqli_query($conn,"select description from news where id=$num-4");
$n4=mysqli_fetch_array($m4);

	
	//echo "$n4[0]";

	
$a1=mysqli_query($conn,"select heading from news where id=$num-0");
$b1=mysqli_fetch_array($a1);

	
	//echo "$b1[0]";
$a2=mysqli_query($conn,"select heading from news where id=$num-2");
$b2=mysqli_fetch_array($a2);

	
	//echo "$b2[0]";
	$a3=mysqli_query($conn,"select heading from news where id=$num-3");
$b3=mysqli_fetch_array($a3);

	
	//echo "$n3[0]";
$a4=mysqli_query($conn,"select description from news where id=$num-4");
$b4=mysqli_fetch_array($a4);

	
	//echo "$n4[0]";



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
       
        <li><a href="#" class="parent"><span>Who can ! </span></a>
            <ul>
                <li><a href="compatibility.php" class="parent"><span>Compatibility</span></a>
             
                </li>
                <li><a href="bloodfats.php" class="parent"><span>Blood facts</span></a>
                    
                </li>
                <li><a href="tips.php"><span>Tips</span></a></li>
                
              
            </ul>
        </li>
         <li><a href="#" class="parent"><span>Donors here</span></a>
            <ul>
                <li><a   class="parent"><span>Search donors</span></a>
                <ul>
                        <li><a href="searchblood.php"><span>search blood</span></a></li>
                        <li><a href="searcheye.php"><span>search eye</span></a></li>
                        <li><a href="searchhelp.php"><span>search help</span></a></li>
                    </ul>
             
                </li>
                <li><a href="viewdonors.php" class="parent"><span>View donors</span></a>
                    
                </li>
                 
            </ul>
        </li>
         <li><a href=" #"class="parent"><span>Required </span></a>
            <ul>
                <li><a href="rblood.php" class="parent"><span> Blood</span></a>
             
                </li>
                <li><a href="reye.php" class="parent"><span>Eye</span></a>
                    
                </li>
                <li><a href="rhelp.php" class="parent"><span>Help</span></a>
                    
                </li>
                 
            </ul>
        </li>
         
                <li ><a href="donorlogin.php" class="parent"><span>Donor LOGIN</span></a></li>
        <li class="last"><a href="contactus.php"><span>Contacts</span></a></li>
    </ul>

  </div>
    <div id="main">
      <div id="content" class="left">
        <div class="projects">
          <h3>Latest news and update</h3>
          <div class="item">
            <div class="left1">
              <h4><?php echo $b1[0] ?></h4>
              <p><?php echo $n1[0] ?></p>
            </div>
          </div>
          <div class="text item">
            <div class="left1">
           	  <h4><?php echo $b2[0] ?></h4>
              	<p><?php echo $n2[0] ?></p>
           	</div>
          </div>
          <div class="text item">
            <div class="left1">
              <h4><?php echo $b3[0] ?></h4>
              <p><?php echo $n3[0] ?></p>
              
            </div>
          </div>
          <div class="text item">
            <div class="left1">
              <h4><?php echo $b4[0] ?></h4>
              <p><?php echo $n4[0] ?></p>
            </div>

          </div>
        </div>
      </div>
      <div id="sidebar" class="right">
        <h3>Some Links</h3>
        <div class="sidebar-nav">
          <ul>
            
            <form  name="login" action="userpassword.php" method="post" onsubmit="return validateForm()">
              
              <p>
                <label class="sidebar-nav">Username :</label>
                <input name="username1" type="text" class="form1"/>
              </p>
              <p>                <br />
                <label class="sidebar-nav">Password :</label>
                <input name="password1" type="password" class="form1"/>
                
              </p>
              <p>
                <input type="submit" class="sidebar-nav" value=" Submit "/>
                &nbsp;
                <a href="password.php">forgot username or password !</a>
              </p>
             
              </p>
            </form>

            <li></li>
            
          </ul>
        </div>
        <p>&nbsp;</p>
        <p><a href="registration.php" class="btn-buy"><em>          REGISTRATION</em></a>
        </p>
        <div class="advertisement">
          <h3>Advertisement</h3>
          <p><span class="ad left"><a href="http://www.shrinathjiinstitute.com"><img src="css/images/ad01.jpg" width=133 border=0  height=121 /></a></span></p>
          <p><span class="ad right"><a href="#"><img src="css/images/ad02.gif" alt="" width="133" height="111" /></a></span></p>
          <p>&nbsp;</p>
          <p>&nbsp;</p>
         
        </div>
        <div class="info">
          <h3 align="left">&nbsp;</h3>
          <h3 align="left">Some Title</h3>
          <p align="left">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of</p>
        </div>
      </div>
      <div class="cl">&nbsp;</div>
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