<?php
session_start();
$f=$_SESSION['user'];
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
      <h1 style="margin-left:0px; color:#000" align="center" >
    
	  <?php
		$conn=mysqli_connect('localhost','root','','savelife');
		 
		$a=mysqli_query($conn,"select id from donorregistration where donortype='Blood'");
$x=0;
		while($row=mysqli_fetch_array($a))
		{
			$x++;
			}
		$a=mysqli_query($conn,"select id from donorregistration where donortype='Eye'");
		$y=0;
		while($row=mysqli_fetch_array($a))
		{
			$y++;

			
			
			}
		
				
		
		
		
		
		$a=mysqli_query($conn,"select id from donorregistration where donortype='Help'");
		$z=0;
		while($row=mysqli_fetch_array($a))
		{
			$z++;
			
			}
		
				$total=$x+$y+$z;
		echo "Total Donors ".$total;
		
		?>
      </h1>
    </div>
  <div id='menu'>
  	<ul class="menu">
    	<li ><a href="index.php" class="parent"><span>Home</span></a></li>
        <li ><a href="pupdate.php" class="parent"><span> Update Profile</span></a></li>
       <li ></li>
        
         
        <li><a href="#" class="parent"><span>Request here</span></a>
            <ul>
                <li><a href="sblood.php" class="parent"><span> Blood</span></a>
             
                </li>
                <li><a href="seye.php" class="parent"><span>Eye</span></a>
                    
                </li>
                <li><a href="shelp.php" class="parent"><span>Help</span></a>
                    
                </li>
                 
            </ul>
        </li>
        <li ><a href="changepass.php" class="parent"><span>Change password</span></a></li>
         
        <li ><a href="logout.php" class="parent"><span> Logout</span></a></li>
  	</ul>

  </div>
     <div class="slider">
      <div class="slider-nav"> <a href="#" class="left notext">1</a> <a href="#" class="left notext">2</a> <a href="#" class="left notext">3</a> <a href="#" class="left notext">4</a>
        <div class="cl">&nbsp;</div>
      </div>
      <ul>
        <li>
          <div class="item">
            <div class="text">
              <h3>welcome donor to</h3>
              <p>&nbsp;</p>
              <h2><em>SAVE LIFE</em></h2>
            </div>
             </div>
        </li>
        <li>
          <div class="item">
            <div class="text">
              <h3><em>donate eye to give</em></h3>
              <p>&nbsp;</p>
              <h2><em>some sight</em></h2>
            </div>
             </div>
        </li>
        <li>
          <div class="item">
            <div class="text">
              <h3><em>Being Human</em></h3>
              <p>&nbsp;</p>
               <h2><em>Gives help</em></h2>
            </div>
          </div>
        </li>
        <li>
          <div class="item">
            <div class="text">
              <h3><em>your help can change</em></h3>
              <p>&nbsp;</p>
              <h2><em>india</em></h2>
            </div>
             </div>
        </li>
      </ul>
    </div>
     <div id="main">
      <div id="content" class="left">
        <div class="highlight">
          <h3>Welcome DONOR to Savelife </h3>
          <img src="css/images/save-a-life.png" alt="" class="right" />
          <p>It  saves innumerable lives across the world in a variety of conditions.   The need  for blood is great - on any given day, approximately 39,000   units of Red Blood  Cells are needed. More than 29 million units of   blood components are transfused  every year. </p>
          <p>There are currently an estimated 15 million blind people in India. 6.8   million of these suffer from corneal blindness with vision less than   6/60 in at least one eye, and of these, about 1 million have bilateral   corneal blindness. If the present trend continues, it is expected that   the number of corneally blind individuals in India will increase to 8.4   million in 2010 and 10.6 million by 2020.so for control the all problems we should be go ahead for help blind and poor</p>
          <p> changes the lives   of thousands of children every year through a simple yet powerful   principle - the best way to change the life of a needy student is to   change the world in which he/she lives. You can be the change! As you   give way to a new life, you also create a new you</p>
          <p>We  positively believe this tool can overcome most of these challenges   by  effectively connecting the blood donors with the blood recipients.......!</p>
         
     
        </div>
        
        <div class="item">
            <h3>BLOOD DONATION</h3>
         <p >This is a web application allows you to access the whole information about Blood Bank Management Software, reah.dily scalable and adaptable to meet the complex need of Blood Banks Who are Key Facilitator for the Healthcare Sector, it also supports all the functionalities of Blood Bank</p>
           
           
           
           
        </div>
         <div class="item">
            <h3>eye DONATION</h3>
         <p >This is a web application allows you to access the whole information about Blood Bank Management Software, reah.dily scalable and adaptable to meet the complex need of Blood Banks Who are Key Facilitator for the Healthcare Sector, it also supports all the functionalities of Blood Bank</p>
             
        </div>
         <div class="item">
            <h3>HELP DONATION</h3>
         <p> changes the lives   of thousands of children every year through a simple yet powerful   principle - the best way to change the life of a needy student is to   change the world in which he/she lives. You can be the change! As you   give way to a new life, you also create a new you</p>
            
        </div>
      </div>
      <div id="sidebar" class="right">
        <h3>Donor name</h3>
        <div class="sidebar-nav">
          <ul>
            <li>wel come to SAVELIFE<br /></li><br/>
            <h2><?php echo $f;?></h2>
            
            
            
            
            </li>
            
          </ul>
        </div>
        <p>&nbsp;</p>
                <p align="center">donor</p>
        <p>&nbsp;</p>
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