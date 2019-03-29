		<?php
session_start();


			
			$p=$_SESSION['user'];
			$v=$_SESSION['pass'];
			
			
			
			$conn=mysqli_connect('localhost','root','','savelife');
			 
			$query=mysqli_query($conn,"select * from userregistration where email='$p'  and password2='$v'");
			$bgp="";
			
			$s="select * from userregistration where email='$p'  and password2='$v'";
			
			//echo $s;
			
			
			while($row=mysqli_fetch_array($query))
			{
				
				$name=$row['name'];
				$lastname=$row['lname'];
				$mail=$row['email'];
				$p=$row['password2'];
				$m=$row['mobile'];
				$sex=$row['sex'];
				$street=$row['street'];
				$area=$row['area'];
				$city=$row['city'];
				$state=$row['state'];
				$pincode=$row['pincode'];
				$country=$row['country'];
				$bgp=$row['bloodgroup'];
				}
			$_SESSION['bgroup']=$bgp;
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
       
        <li><a href="updateprofile.php" class="parent"><span>Profile update here</span></a>
            
        </li>
          <li ><a href="#" class="parent"><span>View donors</span></a>
           <ul>
                <li><a href="viewblood.php" class="parent"><span> Blood</span></a>
             
                </li>
                <li><a href="vieweye.php" class="parent"><span>Eye</span></a>
                    
                </li>
                <li><a href="viewhelp.php" class="parent"><span>Help</span></a>
                    
                </li>
                 
            </ul>
          
          
          
          </li>
         <li><a href="#" class="parent"><span>Post & Search</span></a>
            <ul>
                <li><a href="searchblood.php" class="parent"><span> Blood</span></a>
             
                </li>
                <li><a href="searcheye.php" class="parent"><span>Eye</span></a>
                    
                </li>
                <li><a href="searchhelp.php" class="parent"><span>Help</span></a>
                    
                </li>
                 
            </ul>
        </li>
        <li ><a href="changepass.php" class="parent"><span>Change password</span></a></li>
                <li ><a href="news&events.php" class="parent"><span>News&amp;events</span></a></li>
        <li class="last"><a href="logout.php"><span>Logout</span></a></li>
    </ul>

  </div>
  <div id="main">
      <div id="content" class="left">
        <div class="highlight">
         <center> <h3>user rEGISTRATION HERE</h3></center>
         <form method="post" action="uupdateinsert.php" id="form1">
           <div class="foram" id="foram">

            
  <div class="div_hw">            
  
 	 <div class="usr_nm">
  		<div class="left_user">
        first name
 			 <strong>
              
   			 <p style=";color:#F00" ><?php  echo $name;  ?></p>
    		</strong><br>
           
            
    
   
    </div>
    
    <div class="user_left">
    last name<br/>
    <strong>
   
   			 <p style="color:#F00;" ><?php echo $lastname;  ?></p>
    		</strong>
    
  </p>
  </div>
    </div>
    
  <div class="usr_nm">
  <strong>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <o1>Your current email address</o1></strong><br/>
  <input  name="mail" type="text" value="<?php echo $mail; ?>" id="Email" style="height:30px;width:385px; margin-left:40px; box-shadow: 4px 4px 5px #888888"/>
	</div>
  <div class="usr_nm">
    <div class="left_user">
  

  <strong>
  <o1>Old Password</o1></strong><br>
  <input name="pasword11" type="text" value="<?php echo $p; ?> " style="height:30px;width:200px; box-shadow: 4px 4px 5px #888888"/>
	</div>

	<div class="user_left">


 <strong>
  <o1>New password</o1></strong><br>
  <input name="password12" type="password" value="     "
style="height:30px;width:200px; box-shadow: 4px 4px 5px #888888"/>


	</div>

</div>
<div class="usr_nm">
<div class="left_user">
  <strong>
  <o1>Mobile number</o1></strong>
<br>


<input name="mno" type="text" value="<?php echo$m; ?>" id="_txtmono" style="height:30px;width:200px;margin-top:5px; box-shadow: 4px 4px 5px #888888"/>
</div>
<div class="user_left">
<strong>
<o1>Sex</o1><br /></strong>
<strong><o1>MALE</o1></strong><input name="r" type="radio" value="MALE">
<strong><o1>FEMALE</o1></strong><input name="r" type="radio" value="MALE">
	</div>
</div>
		<div class="usr_nm">
        <div class="left_user">
          <strong><o1>Street</o1></strong>
          <input type="text" name="street" id="street" value="<?php echo$street;?>" style="height:30px; width:200px;box-shadow: 4px 4px 5px #888888";/>          
          
          
          </div><div class="user_left">
          <strong><o1>Area</o1></strong><br />
    <input type="text" name="area" id="area" value="<?php echo $area;?>" style="height:30px; width:200px;box-shadow: 4px 4px 5px #888888"/>

			</div>
		</div>
		<div class="usr_nm">
		  <div class="left_user">
          <strong><o1>City</o1></strong><br />
    <select name="city" style="height:30px; width:200px;box-shadow: 4px 4px 5px #888888">
    <option><b><?php echo $city; ?></option>
<option><b>Rajasthan</option>
<option><b>UP</option>
<option><b>Bihar</option>
</select>
          </div>
		  <div class="user_left">
           <strong><o1>State</o1></strong><br />
    <select name="state" style="height:30px; width:200px;box-shadow: 4px 4px 5px #888888">
     <option><b><?php echo $state; ?></option>
<option><b>India</option>
<option><b>Pakistan</option>
<option><b>usa</option>
</select>
          </div>
        </div>
        <div class="usr_nm">
		  <div class="left_user">
          <strong><o1>Pincode</o1></strong><br />
          <input type="text" name="pincode" value="<?php echo $pincode;?>" style="height:30px; width:200px;box-shadow: 4px 4px 5px #888888"/>
          
          </div>
		  <div class="user_left">
          <strong><o1>country</o1></strong><br />
          <select name="country" style="height:30px; width:200px;box-shadow: 4px 4px 5px #888888">
           <option><b><?php echo $country; ?></option>
<option><b>India</option>
<option><b>Pakistan</option>
<option><b>usa</option>
</select>
           
          </div>
        </div>
        <div class="usr_nm">
          <div class="user_left">
            <strong><o1>Blood group</o1></strong><br />
        <strong> <?php echo $bgp;?></strong>

           
        </div>
        </div>
        
       
        
  </div>
<input type="submit" class="sidebar-nav" value=" Submit "  style=" margin-left:225px;"/>
</div>

</form>
        </div>
        <div class="projects">
          
        </div>
      </div>
      <div id="sidebar" class="right">
        <h3>USER TIPS</h3>
        <div class="sidebar-nav">
          <ul>
            <li>
             » Please Fill all field.<br />
              » After registration user can login.<br />
              » User can also register as donor.<br />
              » All donors are seacrhed according to user blood compatibility<br />
               » All donors are seacrhed according to user blood compatibility<br />
              
              
            
            
            
            </li>
            
          </ul>
        </div>
        <p>&nbsp;</p>
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