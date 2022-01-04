<?php 
error_reporting(0);
session_start();


	$matric=$_POST['student'];
	//$user=$_SESSION['student'];

?>

<?php 
$msg="";

$con=mysql_connect("localhost","root","")or die(mysql_error());
	mysql_select_db("otdb")or die(mysql_error());
?>
<?php
$query = "";

		 $sql = "SELECT * FROM student WHERE matricno=$matric";
		 
		 if(mysql_num_rows(mysql_query($sql)) > 0 ){
	$row = mysql_fetch_array((mysql_query($sql)));
		 }
		 else {
			
			header("Location:first_transcript.php?msg=1");
			//echo "result not available"; 
		 }

	
	
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
.style3 {font-family: Georgia, "Times New Roman", Times, serif; font-weight: bold; font-size: 12px; }
</style>
</head>

<body>
<form id="form1" name="form1" method="post" action="">
  <table width="784" height="289" border="0" align="center">
    <tr>
      <td height="23"><img src="images/head1.png" width="900" height="120" /></td>
    </tr>
    <tr>
      <td height="235" align="center" valign="middle"><p>&nbsp;</p>
        <table width="758" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td width="748" align="center"><h2>First Session Result</h2></td>
        </tr>
      </table><br />
        <table width="631" border="0" cellpadding="0" cellspacing="0">
          <tr>
            <td> </td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td width="139">SurName </td>
            <td width="247"><strong><span class="style3"><?php echo $row['surname']; ?></span></strong></td>
            <td width="207">&nbsp;</td>
          </tr>
          <tr>
            <td>Other Name </td>
            <td><strong><span class="style3"><?php echo $row['othername']; ?></span></strong></td>
            <td rowspan="7" align="center"><img name="" src="upload/<?php echo $row['matricno']; ?>.jpg" width="162" height="143" alt="" /></td>
          </tr>
          <tr>
            <td>Matric Number</td>
            <td><strong><span class="style3"><?php echo $row['matricno']; ?></span></strong></td>
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
        </table><br />
        <table width="848" border="0" cellpadding="0" cellspacing="1">
          <tr>
            <td colspan="6" align="center" valign="middle" bgcolor="#993300"><h1><strong> ND 1 FIRST SEMESTER</strong> RESULT</h1></td>
          </tr>
          <tr>
            <td colspan="6" align="center" valign="middle">&nbsp;</td>
          </tr>
          <tr>
            <td width="127" align="center" valign="middle" bgcolor="#CCCCCC"><strong>COURSES</strong></td>
            <td width="287" align="center" valign="middle" bgcolor="#CCCCCC"><strong>COURSE TITTLE</strong></td>
            <td width="84" align="center" valign="middle" bgcolor="#CCCCCC"><strong>UNITS</strong></td>
            <td width="138" align="center" valign="middle" bgcolor="#CCCCCC"><strong>SCORE </strong></td>
            <td width="110" align="center" valign="middle" bgcolor="#CCCCCC"><strong>GRADE</strong></td>
            <td width="81" align="center" valign="middle" bgcolor="#CCCCCC">GP</td>
          </tr>
         
          
            <?php
		$c=0;
			  $sql = "SELECT * FROM score WHERE matricno='$matric' AND semester='fs' AND level='ND 1' order by id asc;";
			    $query=mysql_query($sql) or die(mysql_error());
  
  while(($rows=mysql_fetch_array($query)))
  {
 $c++;
  extract($rows);

$unit=$rows['unit'];
			  if($semester=='fs')
		 // $totalunit +=$unit;
		  
		  
  ?>
            <td align="center" valign="middle"><strong><span class="style3"><?php echo $course; ?></span></strong></td>
            <td align="center" valign="middle"><strong><span class="style3"><?php echo $courset; ?></span></strong></td>
            <td align="center" valign="middle"><strong><span class="style3"><?php echo $unit; ?></span></strong></td>
            <td align="center" valign="middle"><strong><span class="style3"><?php echo $score ?></span></strong></td>
            
            <td align="center" valign="middle">
			<?php if (($score < 40 ) && ($score >= 0)) echo "F"; if (($score >=40) && ($score <=44 ))echo "E"; if (($score >=45) && ($score <=49)) echo "D"; if (($score >=50) && ($score <=59)) echo "C";  if (($score >=60) && ($score <=69)) echo "B";  if (($score >=70) && ($score <=100)) echo "A"; if ($score >=100) echo "undefined" ?></td>
            
            <td align="center" valign="middle"><?php if ($score <40 )  echo $F=$unit*0; if (($score >=40) && ($score <=44 ))echo $e=$unit*1; if (($score >=45) && ($score <=49)) echo $d=$unit*2;  if (($score >=50) && ($score <=59)) echo $c=$unit*3;  if (($score >=60) && ($score <=69)) echo $B=$unit*4; if (($score >=70) && ($score <=100)) echo $A=$unit*5; if ($score >=100) echo "undefined" ?></td>
          </tr>
          <?php } ?>
          
           <tr>
            <td align="center" valign="middle" colspan="6">&nbsp;</td>
            
          </tr>
          <tr>
        </table>
        <table width="848" border="0" cellpadding="0" cellspacing="1">
          <tr>
            <td colspan="6" align="center" valign="middle" bgcolor="#993300"><h1><strong>ND 1 SECOND SEMESTER</strong> RESULT</h1></td>
          </tr>
          <tr>
            <td colspan="6" align="center" valign="middle">&nbsp;</td>
          </tr>
          <tr>
            <td width="127" align="center" valign="middle" bgcolor="#CCCCCC"><strong>COURSES</strong></td>
            <td width="287" align="center" valign="middle" bgcolor="#CCCCCC"><strong>COURSE TITTLE</strong></td>
            <td width="84" align="center" valign="middle" bgcolor="#CCCCCC"><strong>UNITS</strong></td>
            <td width="138" align="center" valign="middle" bgcolor="#CCCCCC"><strong>SCORE </strong></td>
            <td width="110" align="center" valign="middle" bgcolor="#CCCCCC"><strong>GRADE</strong></td>
            <td width="81" align="center" valign="middle" bgcolor="#CCCCCC">GP</td>
          </tr>
          <tr>
          
            <?php
		$c=0;
			  $sql = "SELECT * FROM score WHERE matricno='$matric' AND semester='ss' AND level='ND 1' order by id asc;";
			    $query=mysql_query($sql) or die(mysql_error());
  
  while(($rows=mysql_fetch_array($query)))
  {
 $c++;
  extract($rows);

$unit=$rows['unit'];
			  if($semester=='fs')
		 // $totalunit +=$unit;
		  
		  
  ?>
            <td align="center" valign="middle"><strong><span class="style3"><?php echo $course; ?></span></strong></td>
            <td align="center" valign="middle"><strong><span class="style3"><?php echo $courset; ?></span></strong></td>
            <td align="center" valign="middle"><strong><span class="style3"><?php echo $unit; ?></span></strong></td>
            <td align="center" valign="middle"><strong><span class="style3"><?php echo $score ?></span></strong></td>
            
            <td align="center" valign="middle">
			<?php if (($score < 40 ) && ($score >= 0)) echo "F"; if (($score >=40) && ($score <=44 ))echo "E"; if (($score >=45) && ($score <=49)) echo "D"; if (($score >=50) && ($score <=59)) echo "C";  if (($score >=60) && ($score <=69)) echo "B";  if (($score >=70) && ($score <=100)) echo "A"; if ($score >=100) echo "undefined" ?></td>
            
            <td align="center" valign="middle"><?php if ($score <40 )  echo $F=$unit*0; if (($score >=40) && ($score <=44 ))echo $e=$unit*1; if (($score >=45) && ($score <=49)) echo $d=$unit*2;  if (($score >=50) && ($score <=59)) echo $c=$unit*3;  if (($score >=60) && ($score <=69)) echo $B=$unit*4; if (($score >=70) && ($score <=100)) echo $A=$unit*5; if ($score >=100) echo "undefined" ?></td>
          </tr>
          <?php } ?>
          
           <tr>
            <?php  $ret="SELECT SUM(unit) AS TotalUnit,SUM(score) As TotalScore,SUM(unit*point) AS UnitPoint FROM score WHERE matricno='$matric' and level='ND 1';"; 
		     
			 	$query=mysql_query($ret) or die(mysql_error());
			  $show=mysql_fetch_assoc($query);
		    ?>
             <td align="center" valign="middle" colspan="6">&nbsp;</td>
           </tr>
           <tr>
           <td align="center"><span style="color:blue"><strong>CGPA:</strong></span></td><td align="left" valign="middle" colspan="5"><span style="color:red"><?php  echo $overall=$show['UnitPoint']/$show['TotalUnit'] ?></span></td>
            </tr>
          <tr>
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
