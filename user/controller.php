<?php 
$query="";
$message="";
$con=mysql_connect("localhost","root","")or die(mysql_error());
	mysql_select_db("otdb")or die(mysql_error());

//(level,semester,matricno,course,courset,unit,score,point)
if(isset($_POST['add'])) {
		$query="INSERT INTO useraccounts
		 VALUES(
		 '".$_POST['level']."',
		 '".$_POST['semester']."',
		 '".$_POST['matricno']."',
		'".$_POST['course']."',
		'".$_POST['courset']."',
		'".$_POST['unit']."',
		 '".$_POST['score']."', 
		 '".$_POST['point']."',
		 ''
		 
		 );";
		 		mysql_query($query) or die("Error in Registration<hr>".mysql_error());
		$message="<h2>Successfully added<h2 />";
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
<style type="text/css">
#form1 table tr td table tr td h2 strong {
	color: #800000;
}
</style>
</head>

<body>
<form id="form1" name="form1" method="post" action="">
  <table width="657" border="1" align="center">
    <tr>
      <td><img src="images/head1.png" width="900" height="120" /></td>
    </tr>
    <tr>
      <td align="center" bgcolor="#B59147"><?php include('ahead.php') ?></td>
    </tr>
    <tr>
      <td height="371" align="center" valign="top"><table width="659" border="0" cellpadding="1" cellspacing="1">
        <tr>
          <td align="center"><h2><strong>ADD STUDENT SCORE</strong></h2></td>
        </tr>
      </table><br />
        <table width="904" border="1">
          <tr>
            <td colspan="6"><p><strong>LEVEL</strong>: <span id="sprytextfield2">
               <select name="level" id="session">
                <option value="ND 1">ND 1</option>
                <option value="ND 2">ND 2</option>
              </select>   
                <span class="textfieldRequiredMsg">A value is required.</span></span> </p> 
              <strong>SEMESTER</strong>:
<select name="semester" id="semester">
                <option value="fs" selected="selected">First Semester</option>
                <option value="ss">Second Semester</option>
              </select>              
            <br /></td>
          </tr>
          <tr>
            <td width="180" align="center" valign="middle" bgcolor="#999999"><strong>STUDENT MATRIC NUMBER</strong></td>
            <td width="78" align="center" valign="middle" bgcolor="#999999"><strong>COURSE</strong></td>
            <td width="278" align="center" valign="middle" bgcolor="#999999"><strong>COURSE TITTLE</strong></td>
            <td width="78" align="center" valign="middle" bgcolor="#999999"><strong>UNIT</strong></td>
            <td width="78" align="left" valign="middle" bgcolor="#999999"><strong> SCORE</strong></td>
            <td colspan="2" align="left" valign="middle" bgcolor="#999999"><strong> POINT</strong></td>
          </tr>
          <tr>
            <td align="center" valign="middle"><input required name="matricno" type="text" id="matricno" size="25" /></td>
            
           <td align="center" valign="middle"><input required name="course" type="text" id="matricno" size="25" /></td>
           
            <td align="center" valign="middle"><input required name="courset" type="text" id="matricno" size="25" /></td>
            
            
            <td align="center" valign="middle"><select name="unit" id="unit">
            
              <option selected="selected">1</option>
              <option>2</option>
              <option>3</option>
              <option>4</option>
              <option>5</option>
            </select></td>
            <td width="100" align="center" valign="middle"><span id="sprytextfield1">
              <input required name="score" type="text" id="score" size="15" />
            <span class="textfieldRequiredMsg">A value is required.</span><span class="textfieldInvalidFormatMsg">Invalid format.</span></span></td>
            
            <td align="center" valign="middle">
            <input required name="point" type="text" size="25" />
           </td>
            
            <td width="87" align="center" valign="middle"><input type="submit" name="add" id="add" value="      ADD     " /></td>
          </tr>
      </table></td>
    </tr>
    <tr bgcolor="#B59147">
      <td align="center"><?php echo $message ?></td>
    </tr>
  </table>
</form>
<script type="text/javascript">
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1", "integer", {validateOn:["blur"]});
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2", "integer", {validateOn:["blur"]});
</script>
</body>
</html>