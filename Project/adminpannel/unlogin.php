
<html>
<title>
FORM
</title>
</head>
<body bgcolor="lightgray">
<table border="1" width="1000"align="center" bgcolor="blue" color="white" >
<tr>
<td   align="center"><h1>
ADMIN LOGIN FORM
</h1>
</td>
</tr>
</table>
<table align="center" border="3">
  <td width="40%" border="4" align="center" valign="top" class="c"> Login<br><br>
  <form name="adlogin" method="post" action="password.php">
	<input name="username" value="username" id="username" onFocus="javascript:if(this.value=='username'){this.value='';}" onBlur="javascript:if(this.value==''){this.value='username';}" type="text"><br><br>
                                    <input name="email"  value="Email" id="email" onFocus="javascript:if(this.value=='Email'){this.value='';}" onBlur="javascript:if(this.value==''){this.value='Email';}" type="text"><br><br>
                                    <input name="password" width="20"value="Phone Number" id="password" onFocus="javascript:if(this.value=='Phone Number'){this.value='';}" onBlur="javascript:if(this.value==''){this.value='Phone Number';}" style="width: 130px" type="PASSWORD"><br><br>
									 
<input name="submit" value="Submit"  id="submit" class="viewall" style="width: 90px; text-align: center" type="submit"><br><br>
<p size="5" >USERNAME OR PASSWORD INCORRECT</p>
</form>
</table>
</body>
</html>
