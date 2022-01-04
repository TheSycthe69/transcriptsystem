<?php 
error_reporting(0);
if(!mysql_connect("localhost","root","")) {
	die("<h2>Server:</h2><hr> Connection problem.");
}
mysql_select_db('otdb') or die(mysql_error());
session_start();


if(isset($_POST['login'])); 
	    $query="SELECT * FROM student WHERE matricno='".$_POST['matricno']."' and password='".$_POST['password']."';";
	$result=mysql_query($query) or die(mysql_error());
	$row=mysql_fetch_array($result);
	if($row){
	session_start();
	//$_SESSION['name'] = $_POST['matricno'];
	$_SESSION["student"]=$_POST["matricno"];
			$_SESSION["serial"]=serialize($student);
	header("Refresh: 0; URL=student.php?surname=".$_POST['matricno']);    
    }
		else
		{
			$msg="Incorrect matric number or password";  
		}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style type="text/css">
#form1 table tr td table tr td table tr td strong {
	font-family: Trebuchet MS, Arial, Helvetica, sans-serif;
}
</style>
<script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
<link href="css.css" rel="stylesheet" type="text/css">
</head>

<body>
<form id="form1" name="form1" method="post" action="">
  <table width="848" height="356" border="1" align="center">
    <tr>
      <td width="838" height="350"><table width="900" height="275" border="1" cellpadding="1" cellspacing="0">
        <tr>
          <td width="824"><img src="images/head1.png" width="900" height="120" /></td>
          </tr>
        <tr>
          <td width="900" height="20" align="center" bgcolor="#B38C40"><table width="884" border="0" cellpadding="0" cellspacing="0">
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
          <td height="194" align="center" valign="middle"><table width="368" border="4" bordercolor="#B38C40" cellpadding="2" cellspacing="2">
           
           <tr>
            <td width="299" align="center"><span style="font-size:36px; color:#500">Student Login Page </span></td>
          </tr>
           
          </table>
          
          <br />
          
           <fieldset style="width:500px">
          <legend style="color:#500; font-size:16px;"><i>Provide registered matric number</i></legend>
          <table width="513" border="0" cellpadding="4" cellspacing="4">
         
            <tr>
              <td width="166" align="right" bgcolor="#DECEAE"><strong>Matric Number</strong></td>
              <td width="331" bgcolor="#DECEAE"><span id="sprytextfield1">
                <input name="matricno" type="text" id="matricno" size="44" />
                <span class="textfieldRequiredMsg">Matric No is required.</span></span></td>
            </tr>
            
            <tr>
              <td width="166" align="right" bgcolor="#DECEAE"><strong>Password</strong></td>
              <td width="331" bgcolor="#DECEAE"><span id="sprytextfield1">
                <input name="password" type="password" id="password" size="44" />
                <span class="textfieldRequiredMsg">Password No is required.</span></span></td>
            </tr>
            
            <tr>
              <td colspan="2" align="center" bgcolor="#FFFFFF"><input type="submit" name="button" id="button" value="     login      " /></td>
              </tr>
              
          </table>
          </fieldset>
          </td>
          
  </tr>
  

  
        <tr>
          <td bgcolor="#B38C40">&nbsp;</td>
        </tr>
         <tr>
    		<td align="center" bgcolor="#660000"><span style="color:#FFF">&copy;Copyright 2015 Session</span> <br /> 
	  <span style="float:right; color:#FFF"> Designed By Paul Adebambo</span></td>
    </tr>
      </table></td>
</tr>
  </table>
</form>
<script type="text/javascript">
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1", "none", {validateOn:["blur"], hint:"20021345"});
</script>
</body>
</html>
