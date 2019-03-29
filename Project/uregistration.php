
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
 function validate1()
	 {
		 if (document.getElementById("fn").value == "")
		 {
			 alert("Please enter Name");
			 document.getElementById("fn").focus();
			 return false;
		 }
		 if (document.getElementById("email").value == "")
		 {
			 alert("Please enter E-mail");
			 document.getElementById("email").focus();
			 return false;
		 } 
		         var emailPattern=/^([A-Za-z])$/;
		         var emailid=document.getElementById("email").value.charAt(0);
		         var matchArray = emailid.match(emailPattern);
	         if (matchArray == null)
	         {
		         alert("Your E-mail seems incorrect. Please start with alphabet and try again. ex:s@d.com");
		         document.getElementById("email").focus();
		         return false;
	         }
		         var emailPat =/^([\w]+)(\.[\w]+)*@([\w\-]+)(\.[\w]{2,7})(\.[a-z]{2})?$/;
		         var emailid=document.getElementById("email").value;
		         var matchArray = emailid.match(emailPat);
	         if (matchArray == null)
	         {
		         alert("Your E-mail seems incorrect. Please try again.");
		         document.getElementById("email").focus();
		         return false;
	         }
			  if (document.getElementById("pass1").value == "")
	         {
		         alert("Please password");
		         document.getElementById("pass1").focus();
		         return false;
	         }
			  if (document.getElementById("pass2").value == "")
	         {
		         alert("Please provide conferm passsword");
		         document.getElementById("pass2").focus();
		         return false;
	         }
			  if (document.getElementById("pass1").value != document.getElementById("pass2").value )
			 {
				 alert("password not conform");
				 document.getElementById("pass1").focus();
				 document.getElementById("pass2").focus();
				 
				 
				 }
			  			 
		 if (document.getElementById("mno").value == "")
	         {
		         alert("Please enter Phone");
		         document.getElementById("mno").focus();
		         return false;
	         }
	      var digits="0123456789-+()";
	         var temp;
	         for (var i=0;i<document.getElementById("mno").value.length;i++)
             {
                       temp=document.getElementById("mno").value.substring(i,i+1);
                       if (digits.indexOf(temp)==-1)
                       {
                                alert("Please enter numbers only");
                                document.getElementById("mno").focus();
                                return false;
                       }
             }	
			 
			  if (document.getElementById("r").value == "")
	         {
		         alert("Please choose sex");
		         document.getElementById("r").focus();
		         return false;
	         }
			  if (document.getElementById("street").value == "")
	         {
		         alert("Please enter street");
		         document.getElementById("street").focus();
		         return false;
	         }
		 if (document.getElementById("area").value == "")
	         {
		         alert("Please enter area");
		         document.getElementById("area").focus();
		         return false;
	         }
			  if (document.getElementById("city").value == "")
	         {
		         alert("Please select city");
		         document.getElementById("city").focus();
		         return false;
	         }
			  if (document.getElementById("state").value == "")
	         {
		         alert("Please select state");
		         document.getElementById("state").focus();
		         return false;
	         }
		 
			  if (document.getElementById("pincode").value == "")
	         {
		         alert("Please enter pincode");
		         document.getElementById("city").focus();
		         return false;
	         }
			  if (document.getElementById("country").value == "")
	         {
		         alert("Please select country");
		         document.getElementById("country").focus();
		         return false;
	         }
			   if (document.getElementById("bgroup").value == "")
	         {
		         alert("Please select blood group");
		         document.getElementById("bgroup").focus();
		         return false;
	         }
		
		
			 
			 
			 
			 
			 
			 
			 
			 
			 
			          
	         iif (document.getElementById("pass1").value == "")
		 {
			 alert("Please enter Message");
			 document.getElementById("message").focus();
			 return false;
		 }
	         if (document.getElementById("resume").value == "")
	         {
		         alert("Please Paste Your Resume");
		         document.getElementById("resume").focus();
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
         <li><a href="#" class="parent"><span>Required </span></a>
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
        <div class="highlight">
         <center> <h3>user rEGISTRATION HERE</h3></center>
         <form method="post" action="ureginsert.php" name="form1">
           <div class="foram" id="foram">

            
  <div class="div_hw">            
  
 	 <div class="usr_nm">
  		<div class="left_user">
 			 <strong>
   			 <o1>Name</o1>
    		</strong><br>
    
    <input name="fn" id="fn" type="text"  style="height:30px;width:200px;box-shadow: 4px 4px 5px #888888; " />
    </div>
    
    <div class="user_left">
    <o1>&nbsp;</o1><br>
    <input name="ln"  id="ln"type="text" style="height:30px;width:200px;box-shadow: 4px 4px 5px #888888; "  />
  </p>
  </div>
    </div>
    
  <div class="usr_nm">
  <strong>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<o1>Your current email address</o1></strong><br/>
  <input  name="email" id="email" type="text" style="height:30px;width:300px; margin-left:40px;box-shadow: 4px 4px 5px #888888; "  
/>
	</div>
    
<div class="usr_nm">
  <div class="left_user">
  

  <strong>
  <o1>Password</o1></strong><br>
  <input name="pass1"  id="pass1" type="password" 
  
style="height:30px;width:200px; box-shadow: 4px 4px 5px #888888"/>
	</div>

	<div class="user_left">


 <strong>
  <o1>Confrom Password here</o1></strong><br>
  <input name="pass2" id="pass2" type="password" 
  
style="height:30px;width:200px; box-shadow: 4px 4px 5px #888888"/>


	</div>

</div>
<div class="usr_nm">
<div class="left_user">
  <strong>
  <o1>Mobile number</o1></strong>
<br>


<input name="mno" id="mno" type="text"   style="height:30px;width:200px;margin-top:5px; box-shadow: 4px 4px 5px #888888"/>
</div>
<div class="user_left">
<strong>
<o1>Sex</o1><br /></strong>
<strong><o1>MALE</o1></strong><input name="r" id="r" type="radio" value="MALE">
<strong><o1>FEMALE</o1></strong><input name="r" id="r" type="radio" value="MALE">
	</div>
</div>
		<div class="address1">
		  <div class="txtarea">
          <strong><o1>Street</o1></strong>
          <input type="text" name="street" id="street" style="height:30px; width:200px;box-shadow: 4px 4px 5px #888888";/>          
          
          
          </div>
          <div class="user_left">
          <strong><o1>Area</o1></strong><br />
    <input type="text" name="area" id="area" style="height:30px; width:200px;box-shadow: 4px 4px 5px #888888"/>

			</div>
		</div>
		<div class="usr_nm">
		  <div class="left_user">
          <strong><o1>Country</o1></strong><br />
    <select name="country" style="height:30px; width:200px;box-shadow: 4px 4px 5px #888888">
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
		  <div class="user_left">
           <strong><o1>State</o1></strong><br />
    <select name="state" style="height:30px; width:200px;box-shadow: 4px 4px 5px #888888;" onchange="showUser(this.value)">
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
        <div class="usr_nm">
		  <div class="left_user">
           <strong><o1>Pincode</o1></strong><br />
         <input type="text" name="pincode" id="pincode"style="height:30px; width:200px;box-shadow: 4px 4px 5px #888888"/> 
          </div>
		  <div class="user_left" id="txtHint">
         
          
           <strong><o1>Please enter country and state</o1></strong><br />
    
          </div>
        </div>
        <div class="usr_nm">
          <div class="user_left">
            
            
            <strong><o1>Blood group</o1></strong><br />
    <select name="bgroup" id="bgroup" style="height:30px; width:200px;box-shadow: 4px 4px 5px #888888">
    <option><b></option>
<option><b>O-</option>
<option><b>O+</option>
<option><b>A-</option>
<option><b>A+</option>
<option><b>B-</option>
<option><b>B+</option>
<option><b>AB-</option>
<option><b>AB+</option>
</select>
        </div>
        </div>
        
       
        
  </div>

</div>
<input type="submit" onclick="return validate1()" class="sidebar-nav" value=" Submit "  style=" margin-left:245px;" />
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