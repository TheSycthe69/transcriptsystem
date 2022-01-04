<?php //include('dbselect.php'); 
$con=mysql_connect("localhost","root","")or die(mysql_error());
	mysql_select_db("otdb")or die(mysql_error());
?>
<?php
$query = "";
if(isset($_GET['surname'])) {
	$sql = "SELECT *FROM student WHERE matricno='".$_GET['surname']."';";
	$row = mysql_fetch_array(mysql_query($sql));
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Student Registration/ print out</title>
<script src="Scripts/AC_RunActiveContent.js" type="text/javascript"></script>
<style type="text/css">
<!--
.style3 {font-family: Georgia, "Times New Roman", Times, serif; font-weight: bold; font-size: 18px; }
-->
tr{
	border:none;
}
</style>
</head>

<body>
<form id="form1" name="form1" method="post" action="">
  <table width="708" align="center">
    <tr>
      <td width="700" align="center"><img src="regimg.png" width="700" height="100" /></td>
    </tr>
    <tr>
      <td height="276" align="center">
        <table width="631" border="0" cellpadding="3" cellspacing="3">
          <tr>
            <td width="139">Surname </td>
            <td width="247"><span class="style3"><?php echo $row['surname']; ?></span></td>
            <td width="207">&nbsp;</td>
          </tr>
          <tr>
            <td>Othername </td>
            <td><span class="style3"><?php echo $row['firstname'].' '.$row['othername']; ?></span></td>
            <td rowspan="7" align="center"><img name="" src="upload/<?php echo $row['matricno']; ?>.jpg" width="162" height="143" alt="" /></td>
          </tr>
          <tr>
            <td>Matric Number</td>
            <td><strong><span class="style3"><?php echo $row['matricno']; ?></span></strong></td>
          </tr>
          <tr>
            <td>Gender</td>
            <td><span class="style3"><?php echo $row['gender']; ?></span></td>
          </tr>
          <tr>
            <td>Phone No </td>
            <td><span class="style3"><?php echo $row['phoneno']; ?></span></td>
          </tr>
          <tr>
            <td>Email</td>
            <td><span class="style3"><?php echo $row['email']; ?></span></td>
          </tr>
          <tr>
            <td>Course</td>
            <td><span class="style3"><?php echo $row['course']; ?></span></td>
          </tr>
          <tr>
            <td>Level</td>
            <td><span class="style3"><?php echo $row['level']; ?></span></td>
          </tr>
      </table></td>
    </tr>
    <tr>
      <td bgcolor="#B58F46"><input type="submit" name="Submit" value="print" onclick="print()" /></td>
    </tr>
  </table>
</form>
</body>
</html>
