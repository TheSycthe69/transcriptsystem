<?php 
session_start();
if(!isset($_SESSION["student"]))

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
<?php
$query = "";
if(isset($_GET['surname'])) 
	$sql = "SELECT *FROM student WHERE matricno='".$_GET['surname']."';";
	else
		$sql = "SELECT *FROM student WHERE matricno='".$_SESSION['student']."';";
	$row = mysql_fetch_array(mysql_query($sql));

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
  <table width="784" height="401" border="1" align="center">
    <tr>
      <td height="23"><img src="images/head1.png" width="900" height="120" /></td>
    </tr>
    <tr>
      <td height="27" align="left" valign="middle" bgcolor="#E5D7BE"><?php include ('shead.php') ?></td>
    </tr>
    <tr>
      <td height="235" align="center" valign="middle"><table width="758" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td width="748" align="center"><blockquote>
            <h1><strong><marquee>Yor are welcome</marquee></strong></h1>
          </blockquote></td>
        </tr>
      </table><br />
        <table width="631" border="1" cellpadding="3" cellspacing="3">
          <tr>
            <td width="139">Sur Name </td>
            <td width="247"><strong><span class="style3"><?php echo $row['surname']; ?></span></strong></td>
            <td width="207">&nbsp;</td>
          </tr>
          <tr>
            <td>Other Name </td>
            <td><strong><span class="style3"><?php echo $row['othername']; ?></span></strong></td>
            <td rowspan="6" align="center"><img name="" src="upload/<?php echo $row['matricno']; ?>.jpg" width="162" height="143" alt="" /></td>
          </tr>
          <tr>
            <td>Gender</td>
            <td><strong><span class="style3"><?php echo $row['gender']; ?></span></strong></td>
          </tr>
          <tr>
            <td>Phone No </td>
            <td><strong><span class="style3"><?php echo $row['phoneno']; ?></span></strong></td>
          </tr>
          <tr>
            <td>Email</td>
            <td><strong><span class="style3"><?php echo $row['email']; ?></span></strong></td>
          </tr>
          <tr>
            <td>Course</td>
            <td><strong><span class="style3"><?php echo $row['course']; ?></span></strong></td>
          </tr>
          <tr>
            <td>Level</td>
            <td><strong><span class="style3"><?php echo $row['level']; ?></span></strong></td>
          </tr>
        </table>
        <p><br />
      </p></td>
    </tr>
    <tr>
      <td height="23" bgcolor="#AF8636">&nbsp;</td>
    </tr>
  </table>
</form>
</body>
</html>
