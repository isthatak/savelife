
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
                 
            </ul></li>
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
         <center> <h3>donor details</h3></center>
         <form method="post" action="uupdateinsert.php" id="form1">
         
         <?php
			
		 $donerid=$_GET['donerid'];
	
		 $conn=mysqli_connect('localhost','root','','savelife');
		  
		 $p=mysqli_query($conn,"select * from donorregistration where id=$donerid");
		 while($row=mysqli_fetch_array($p))
		 {
			 $name=$row['name'];
			 $lname=$row['lastname'];
			 $email=$row['email'];
			 $mobile=$row['mobile'];
			 $sex=$row['sex'];
			 $country=$row['country'];
			 $state=$row['state'];
			 $city=$row['city'];
			 $area=$row['area'];
			 $street=$row['street'];
			 $ld=$row['lastdonate'];
		}
		 ?>
         
           <div class="foram" id="foram">

            
  <div class="div_hw">            
  
 	 <div class="usr_nm">
  		<div class="left_user">
        first name
 			 <strong>
              
   			 <p style=";color:#F00" ><?php echo $name;  ?></p>
    		</strong><br>
           
            
    
   
    </div>
    
    <div class="user_left">
    last name<br/>
    <strong>
   
   			 <p style="color:#F00;" ><?php echo $lname;  ?></p>
    		</strong>
    
  </p>
  </div>
    </div>
    
  <div class="usr_nm">
  <strong>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <o1>Your current email address</o1></strong><br/>
  <p style="height:10px;width:385px; margin-left:40px; box-shadow: 4px 4px 5px #888888"> <?php echo $email; ?></p>
	</div>
  <div class="usr_nm">
    <div class="left_user">
  

  <strong>
  <o1>Mobile</o1></strong><br>
  <p style="height:30px;width:200px; box-shadow: 4px 4px 5px #888888"><?php echo $mobile; ?>  </p>
	</div>

	<div class="user_left">


 <strong>
  <o1>Sex</o1></strong><br>
  <p style="height:30px;width:200px; box-shadow: 4px 4px 5px #888888"><?php echo $sex; ?>  </p>

	</div>

</div>
<div class="user_left">
<strong>
<o1>Sex</o1><br /></strong>
<strong><?php echo $sex;?>

	</div>
</div>
		<div class="usr_nm">
        <div class="left_user">
          <strong><o1>Country</o1></strong>
          <p style="height:30px;width:200px; box-shadow: 4px 4px 5px #888888"><?php echo $country; ?>  </p>          
          
          
          </div><div class="user_left">
          <strong><o1>State</o1></strong><br />
    <p style="height:30px;width:200px; box-shadow: 4px 4px 5px #888888"><?php echo $state; ?>  </p>

			</div>
		</div>
		<div class="usr_nm">
		  <div class="left_user">
          <strong><o1>City</o1></strong><br />
    <p style="height:30px;width:200px; box-shadow: 4px 4px 5px #888888"><?php echo $city; ?>  </p>
          </div>
		  <div class="user_left">
           <strong><o1>Area</o1></strong><br />
    <p style="height:30px;width:200px; box-shadow: 4px 4px 5px #888888"><?php echo $area; ?>  </p>
          </div>
        </div>
        <div class="usr_nm">
		  <div class="left_user">
          <strong><o1>Street</o1></strong><br />
          <p style="height:30px;width:200px; box-shadow: 4px 4px 5px #888888">"<?php echo $street; ?>  </p>
          
          </div>
		  <div class="user_left">
          <strong><o1>country</o1></strong><br />
          <p style="height:30px;width:200px; box-shadow: 4px 4px 5px #888888"><?php echo $ld; ?>  </p>
           
          </div>
        </div>
        <div class="usr_nm">
          
        </div>
        
       
        
  </div>
<?php
echo"<a link href='viewblood.php'> <strong><o1>BACK</o1></strong><br /></a>";


?>
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