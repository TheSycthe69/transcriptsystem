
<?php
error_reporting(0);
$query = "";
$message = "";
mysql_connect("localhost","root","")or die (mysql_error());
	mysql_select_db("otdb");
	
		
	if(isset($_POST['Submit'])) {
	if(!($_POST['name']))
		$message = "name is required";
	else if(!($_POST['email']))
		$message = "email is requied";
	else {
		$query="INSERT INTO contact(name,reg,email,message) VALUES( '"
		.$_POST['name']."', '"
		.$_POST['reg']."', '"
		.$_POST['email']."', '"
		.$_POST['message']."'
		);";
		mysql_query($query) or die("Error in Registration<hr>".mysql_error());
		$messagesend="Sucesfuly Submited,";
	}
	}
	?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>contact</title>
<script src="Scripts/AC_RunActiveContent.js" type="text/javascript"></script>
<style type="text/css">
<!--
.style1 {
	font-size: 36px;
	font-weight: bold;
	color: #990000;
}
.style2 {color: #FF0000}
-->
</style>
</head>

<body>
<form id="form1" name="form1" method="post" action="">
  <table width="858" height="448" border="1" align="center">
    <tr>
      <td height="27" align="left" valign="top"><img src="images/head1.png" width="900" height="120" /></td>
    </tr>
    <tr>
      <td width="848" height="23" align="center" valign="top"><table width="884" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td width="101" align="center" valign="middle" bgcolor="#DECFAF"><a href="home.php">HOME</a></td>
          <td width="178" align="center" valign="middle" bgcolor="#DECFAF"><a href="studentreg.php">NEW STUDENT REG</a></td>
          <td width="173" align="center" valign="middle" bgcolor="#DECFAF"><a href="stlogin.php">STUDENT LOGIN</a></td>
          <td width="196" align="center" valign="middle" bgcolor="#DECFAF"><a href="alogin.php">ADMIN LOGIN</a></td>
          <td width="217" align="center" valign="middle" bgcolor="#DECFAF"><a href="contact.php">CONTACT</a></td>
        </tr>
      </table></td>
    </tr>
    <tr>
      <td height="286" align="center" valign="middle" bgcolor="#F6F2EA"><table width="273" border="5" cellpadding="1" cellspacing="1" bordercolor="#B38C40">
        <tr>
          <td width="263"><span class="style1">Information Box </span></td>
        </tr>
      </table>
        <span class="style2"><?php echo $message; ?>.</span><br />        
        <table width="486" border="0" bgcolor="#F6F2EA">
          <tr>
            <td width="205" bgcolor="#DECEAE">Name</td>
            <td width="265" bgcolor="#CCCCCC"><input name="name" type="text" id="name" size="40" /></td>
          </tr>
          <tr>
            <td bgcolor="#DECEAE">Registration No / Phone No </td>
            <td bgcolor="#CCCCCC"><input name="reg" type="text" id="reg" size="40" /></td>
          </tr>
          <tr>
            <td bgcolor="#DECEAE">Email Address </td>
            <td bgcolor="#CCCCCC"><input name="email" type="text" id="email" size="40" /></td>
          </tr>
          <tr>
            <td bgcolor="#DECEAE">Message</td>
            <td bgcolor="#CCCCCC"><textarea style="max-height:100; max-width:100" name="message" id="message"></textarea></td>
          </tr>
          <tr>
            <td colspan="2" align="center" bgcolor="#A88948"><input type="submit" name="Submit" value="        Submit          " /> 
            . <span class="style2"><?php echo $messagesend; ?>.</span></td>
          </tr>
        </table></td>
    </tr>
    <tr>
      <td height="23" align="left" valign="top" bgcolor="#B38C40">&nbsp;</td>
    </tr>
  </table>
</form>
</body>
</html>
