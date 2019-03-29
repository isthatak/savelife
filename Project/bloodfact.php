


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
                <li><a href="bloodfact.php" class="parent"><span>Blood facts</span></a>
                    
                </li>
                <li><a href="tips.php"><span>Tips</span></a></li>
                
              
            </ul>
        </li>
         <li><a href="#" class="parent"><span>Donors here</span></a>
            <ul>
                <li><a class="parent"><span>Search donors</span></a>
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
         <li><a href="#" class="parent"><span>Required </span></a>
            <ul>
                <li><a href="rblood.php" class="parent"><span>Blood</span></a>
             
                </li>
                <li><a href="reye.php" class="parent"><span>Eye</span></a>
                    
                </li>
                <li><a href="ehelp.php" class="parent"><span>Help</span></a>
                    
                </li>
                 
            </ul>
        </li>
         
        <li ><a href="donorlogin.php" class="parent"><span>Donor LOGIN</span></a></li>
        <li class="last"><a href="contactus.php"><span>Contacts</span></a></li>
    </ul>

  </div>
  <div id="main">
      <div id="content" class="left">
        <div class="bfact">
        <d>BLOOD FACTS</d><br><br />
        
         » There is no substitute for human Blood <br>
          » Blood makes up about 7% of your body's weight. <br>
» An average adult has about 14 to 18 pints of Blood. <br>
» One standard unit or pint of Blood equals about two cups. <br>
» Blood carries oxygen and nutrients to all of the body. <br>
» Blood carries carbon dioxide and other waste products back to the lungs, kidneys and liver for disposal. <br>
» Blood fights against infection and helps heal wounds. <br>
» One unit of donated whole Blood is separated into components before 
use (red Blood cells, white Blood cells, plasma, platelets, etc.) <br>
» There are four main Blood types: A, B, AB and O. <br>
» Each Blood type is either Rh positive or negative. <br>
» There are about one billion red Blood cells in a few drops of whole Blood. <br>
» Red Blood cells live about 120 days in our bodies. <br>
» Red Blood cells can be stored under normal conditions for up to 42 days. <br>
» Frozen red Blood cells can be stored for ten years, and more. <br>
» Platelets must be used within five days. <br>
» Platelets are small Blood cells that assist in the process of Blood 
clotting helping those with leukemia and other cancers, controlling 
bleeding. <br>
» Plasma, the fourth major component of Blood, is a sticky, pale yellow 
fluid mixture of water, protein and salts. It is 95% water. The other 5%
 is made up of nutrients, proteins and hormones. <br>
» Blood Plasma constitutes 55% of the volume of human Blood. <br>
» Plasma helps maintain Blood pressure, carries Blood cells, nutrients, 
enzymes and hormones, and supplies critical proteins for Blood clotting 
and immunity. <br>
» Type AB plasma has been considered as the universal Blood plasma type,
 and therefore AB plasma is given to patients with any Blood type. <br>
» Frozen Plasma can be stored for up to one year. <br>
» Human Blood; red Blood cells, white Blood cells, plasma and platelets are made naturally by the body in the bone marrow. 
        </div>
       
      </div>
      <div id="sidebar" class="right">
        <h3>USER login </h3>
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
        <p align="center">USER</p>
        <p><a href="registration.php" class="btn-buy"><em>          REGISTRATION</em></a>
        </p>
        <div class="advertisement">
          <h3>Advertisement</h3>
          <p><span class="ad left"><a href="http://www.shrinathjiinstitute.com"><img src="css/images/ad01.jpg" width=133 border=0  height=121 /></a></span></p>
          <p><span class="ad right"><a href="#"><img src="css/images/ad02.gif" alt="" width="133" height="111" /></a></span></p>
          <p>&nbsp;</p>
          <p>&nbsp;</p>
         
        </div>
        <div class="advertisement">
          <h3>Advertisement</h3>
          <p><span class="ad left"><a href="http://www.shrinathjiinstitute.com"><img src="css/images/ad01.jpg" width=133 border=0  height=121 /></a></span></p>
          <p><span class="ad right"><a href="#"><img src="css/images/ad02.gif" alt="" width="133" height="111" /></a></span></p>
          <p>&nbsp;</p>
          <p>&nbsp;</p>
         
        </div>
        <p align="center">DONOR</p>
        <p><a href="registration.php" class="btn-buy"><em>          REGISTRATION</em></a>
        </p>
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