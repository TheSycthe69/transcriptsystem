<?php 
session_start();
if(!isset($_SESSION["admin"]))

//if(!isset($_SESSION["name"]))
{
	header("Location:home.php");
session_unset();
session_destroy();
header ("location:home.php");

}

?>

<?php 

$con=mysql_connect("localhost","root","")or die(mysql_error());
	mysql_select_db("otdb")or die(mysql_error());
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style type="text/css">
#form1 table tr td table tr td blockquote h1 strong {
	color: #800000;
}
.style3 {font-family: Georgia, "Times New Roman", Times, serif; font-weight: bold; font-size: 18px; }
</style>
</head>

<body>
<form id="form1" name="form1" method="post" action="">
  <table width="784" height="401" border="0" align="center">
    <tr>
      <td height="23"><img src="images/head1.png" width="900" height="120" /></td>
    </tr>
    <tr>
      <td height="27" align="center" valign="middle"><?php include ('ahead.php') ?></td>
    </tr>
    <tr>
      <td height="235" align="center" valign="middle"><br />
        <table width="848" border="0" cellpadding="0" cellspacing="1">
          <tr>
            <td colspan="4" align="center" valign="middle" bgcolor="#993300"><h1><strong>INFORMATION LIST</strong></h1></td>
          </tr>
          <tr>
            <td colspan="4" align="center" valign="middle">&nbsp;</td>
          </tr>
          <tr>
            <td width="150" align="center" valign="middle" bgcolor="#CCCCCC"><strong>NAME</strong></td>
            <td width="228" align="center" valign="middle" bgcolor="#CCCCCC"><strong>MATRIC NUMBER</strong></td>
            <td width="120" align="center" valign="middle" bgcolor="#CCCCCC"><strong>EMAIL ADDRESS</strong></td>
            <td width="138" align="center" valign="middle" bgcolor="#CCCCCC"><strong>MESSAGE </strong></td>
          </tr>
          <tr>
          
            <?php
		$c=0;
			  $sql = "SELECT *FROM contact order by id asc;";
			    $query=mysql_query($sql) or die(mysql_error());
  
  while(($rows=mysql_fetch_array($query)))
  {
  $c++;
  extract($rows);
  
 ?>
            <td align="center" valign="middle"><?php echo $name ?>&nbsp;</td>
            <td align="center" valign="middle"><?php echo $reg ?>;</td>
            <td align="center" valign="middle"><?php echo $email ?>;</td>
            <td align="center" valign="middle"><?php echo $message ?>;</td>
          </tr>
          <?php } ?>
        </table>
        <p><br />
</p></td>
    </tr>
    <tr>
      <td height="23" bgcolor="#DAC8A3">&nbsp;</td>
    </tr>
  </table>
</form>
</body>
</html>
