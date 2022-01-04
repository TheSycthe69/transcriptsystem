<?php 
error_reporting(0);
session_start();

$matric=$_POST['student'];

?>

<?php 

$con=mysql_connect("localhost","root","")or die(mysql_error());
	mysql_select_db("otdb")or die(mysql_error());
?>
<?php

		 $sql = "SELECT * FROM student WHERE matricno=$matric";
		 
		 if(mysql_num_rows(mysql_query($sql)) > 0 ){
	$row = mysql_fetch_array((mysql_query($sql)));
		 }
		 else {
			
			header("Location:final_transcript.php?msg=1");
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
.style3 {font-family: Georgia, "Times New Roman", Times, serif; font-weight: bold; font-size: 14px; }
</style>
</head>

<body>
<form id="form1" name="form1" method="post" action="">
  <table width="784" height="291" border="0" align="center">
    <tr>
      <td height="23"><img src="images/head1.png" width="900" height="120" /></td>
    </tr>
    <tr>
      <td height="235" align="center" valign="middle"><table width="758" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td width="748" align="center"><blockquote>
            <h1><strong>HIGHLAND COLLEGE OF TECHNOLOGY</strong></h1>
          </blockquote></td>
        </tr>
        <tr>
          <td align="center"><strong>TRANSCRIPT</strong></td>
        </tr>
      </table>
        <br />
        <table width="850" border="0" cellpadding="0" cellspacing="4">
          <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td width="139">Surname:</td>
            <td width="737"><strong><span class="style3"><?php echo $row['surname']; ?></span></strong></td>
          </tr>
          <tr>
            <td>Othename:</td>
            <td><strong><span class="style3"><?php echo $row['othername']; ?></span></strong></td>
          </tr>
          <tr>
            <td>Matric Number:</td>
            <td><strong><span class="style3"><?php echo $row['matricno']; ?></span></strong></td>
          </tr>
          <tr>
            <td>Gender:</td>
            <td><strong><span class="style3"><?php echo $row['gender']; ?></span></strong></td>
          </tr>
          <tr>
            <td>Phone No: </td>
            <td><strong><span class="style3"><?php echo $row['phoneno']; ?></span></strong></td>
          </tr>
          <tr>
            <td>Email:</td>
            <td><strong><span class="style3"><?php echo $row['email']; ?></span></strong></td>
          </tr>
          <tr>
            <td>Course:</td>
            <td><strong><span class="style3"><?php echo $row['course']; ?></span></strong></td>
          </tr>
          <tr>
            <td>Level:</td>
            <td><strong><span class="style3"><?php echo $row['level']; ?></span></strong></td>
          </tr>
        </table><br />
        <table width="848" border="0" cellpadding="0" cellspacing="1">
          <tr>
            <td colspan="6" align="center" valign="middle" bgcolor="#993300"><h2><strong>ND 1 SESSION</strong> RESULT</h2></td>
          </tr>
          <tr>
            <td colspan="6" align="center" valign="middle">&nbsp;</td>
          </tr>
          <tr>
            <td width="135" align="center" valign="middle" bgcolor="#CCCCCC"><strong>COURSES</strong></td>
            <td width="292" align="center" valign="middle" bgcolor="#CCCCCC"><strong>COURSE TITTLE</strong></td>
            <td width="106" align="center" valign="middle" bgcolor="#CCCCCC"><strong>UNITS</strong></td>
            <td width="115" align="center" valign="middle" bgcolor="#CCCCCC"><strong>SCORE </strong></td>
            <td width="108" align="center" valign="middle" bgcolor="#CCCCCC"><strong>GRADE</strong></td>
            <td width="71" align="center" valign="middle" bgcolor="#CCCCCC">GP</td>
          </tr>
          <tr>
          
            <?php
		$c=0;
			  $sql = "SELECT *FROM score WHERE matricno='$matric' AND level='ND 1' order by id asc;";
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
        </table>
        <table width="856" border="0">
          <tr>
          
          <?php  $ret="SELECT SUM(unit) AS TotalUnit,SUM(score) As TotalScore,SUM(unit*point) AS UnitPoint FROM score WHERE matricno='$matric' AND level='ND 1';"; 
		     
			 	$query=mysql_query($ret) or die(mysql_error());
			  $show=mysql_fetch_assoc($query);
		    ?>
          
            <td width="761" height="23" align="left"><strong>Total Unit : <?php echo $show['TotalUnit'];?></strong></td>
          </tr>
          
          
          <tr>
            <td height="23" align="left"><strong>Total Score : <?php echo $show['TotalScore'];?></strong></td>
          </tr>
          <tr>
            <td height="23" align="left"><strong>GPA : <?php echo $remark=($show['UnitPoint']/$show['TotalUnit'])  ?></strong></td>
          </tr>
          
          <tr>
            <td height="23" align="left"><strong>REMARKS : <?php if ($remark >=2) echo "PASSED"; else echo "FAILED"; ?></strong></td>
          </tr>
        </table>
        <table width="848" border="0" cellpadding="0" cellspacing="1">
          <tr>
            <td colspan="6" align="center" valign="middle" bgcolor="#993300"><h2><strong>ND 2 SESSION</strong> RESULT</h2></td>
          </tr>
          <tr>
            <td colspan="6" align="center" valign="middle">&nbsp;</td>
          </tr>
          <tr>
            <td width="137" align="center" valign="middle" bgcolor="#CCCCCC"><strong>COURSES</strong></td>
            <td width="290" align="center" valign="middle" bgcolor="#CCCCCC"><strong>COURSE TITTLE</strong></td>
            <td width="106" align="center" valign="middle" bgcolor="#CCCCCC"><strong>UNITS</strong></td>
            <td width="114" align="center" valign="middle" bgcolor="#CCCCCC"><strong>SCORE </strong></td>
            <td width="111" align="center" valign="middle" bgcolor="#CCCCCC"><strong>GRADE</strong></td>
            <td width="69" align="center" valign="middle" bgcolor="#CCCCCC">GP</td>
          </tr>
          <tr>
            <?php
		$c=0;
			  $sql = "SELECT *FROM score WHERE matricno='$matric' AND level='ND 2' order by id asc;";
			    $query=mysql_query($sql) or die(mysql_error());
  
  while(($rows=mysql_fetch_array($query)))
  {
  $c++;
  extract($rows);
  
  $unit=$rows['unit'];
			  if($semester=='ss')
		// $totalunit +=$unit;

/*    if ((v > 0) && (v <= 10)) { msg = 'EASY'; } 
  if ((v > 10) && (v <= 20)) { msg = 'MEDIUM'; } 
  if ((v > 20) && (v <= 30)) { msg = 'HARD'; } 
*/  ?>
            <td align="center" valign="middle"><strong><span class="style3"><?php echo $course; ?></span></strong></td>
            <td align="center" valign="middle"><strong><span class="style3"><?php echo $courset; ?></span></strong></td>
            <td align="center" valign="middle"><strong><span class="style3"><?php echo $unit; ?></span></strong></td>
            <td align="center" valign="middle"><strong><span class="style3"><?php echo $score ?></span></strong></td>
          
           <td align="center" valign="middle">
			<?php if (($score < 40 ) && ($score >= 0)) echo "F"; if (($score >=40) && ($score <=44 ))echo "E"; if (($score >=45) && ($score <=49)) echo "D"; if (($score >=50) && ($score <=59)) echo "C";  if (($score >=60) && ($score <=69)) echo "B";  if (($score >=70) && ($score <=100)) echo "A"; if ($score >=100) echo "undefined" ?></td>
            
            
           <td align="center" valign="middle">
		   <?php if ($score <40 )  echo $F=$unit*0; if (($score >=40) && ($score <=44 ))echo $e=$unit*1; if (($score >=45) && ($score <=49)) echo $d=$unit*2;  if (($score >=50) && ($score <=59)) echo $c=$unit*3;  if (($score >=60) && ($score <=69)) echo $B=$unit*4; if (($score >=70) && ($score <=100)) echo $A=$unit*5; if ($score >=100) echo "undefined" ?></td>
          </tr>
          <?php } ?>
        </table>
        <table width="856" border="0">
         <tr>
          
          <?php  $ret="SELECT SUM(unit) AS TotalUnit,SUM(score) As TotalScore,SUM(unit*point) AS UnitPoint FROM score WHERE matricno='$matric' AND level='ND 2';"; 
		     
			 	$query=mysql_query($ret) or die(mysql_error());
			  $show=mysql_fetch_assoc($query);
		    ?>
          
            <td width="761" height="23" align="left"><strong>Total Unit : <?php echo $show['TotalUnit'];?></strong></td>
          </tr>
          
          
          <tr>
            <td height="23" align="left"><strong>Total Score : <?php echo $show['TotalScore'];?></strong></td>
          </tr>
          <tr>
            <td height="23" align="left"><strong>GPA : <?php echo $remark=($show['UnitPoint']/$show['TotalUnit'])  ?></strong></td>
          </tr>
          
          <tr>
            <td height="23" align="left"><strong>REMARKS : <?php if ($remark >=2) echo "PASSED"; else echo "FAILED"; ?></strong></td>
          </tr>
        <tr>
        <?php  $ret="SELECT SUM(unit) AS TotalUnit,SUM(score) As TotalScore,SUM(unit*point) AS UnitPoint FROM score WHERE matricno='$matric'"; 
		     
			 	$query=mysql_query($ret) or die(mysql_error());
			  $show=mysql_fetch_assoc($query);
		    ?>
        
         <tr>
            <td colspan="6" align="center" valign="middle">&nbsp;</td>
          </tr>
        
          <td  align="left"><strong> Overall CGPA:</strong> <strong>
            <?php  echo $overall=$show['UnitPoint']/$show['TotalUnit'] ?>
          </strong></td><</tr>
          
          
          </table>
          
        <table width="857" border="0">
         <tr>
            <td colspan="6" align="center" valign="middle">&nbsp;</td>
          </tr>
           <tr>
           <td colspan="4"><strong><span style="color:blue">DIPLOMA CLASS:</span></strong> 
            <?php     
			if (( $overall >= 4.5) && ( $overall <= 5.0 )) 
				echo "<strong><span style='color:red'>Distinction</span></strong>"; 
				
			if (( $overall >= 4.0) && ( $overall <= 4.4 )) 
				echo "<strong> <span style='color:red'> Upper Credit</span></strong>"; 
				
			if (( $overall >= 3.0) && ( $overall <= 3.9 )) 
				echo "<strong><span style='color:red'> Lower Credit</span></strong>"; 
				
			if  (( $overall >= 2.0) && ( $overall <= 2.9 )) 
				echo "<strong><span style='color:red'> Pass </span></strong>"; 
			
			if  (( $overall >= 0.0) && ( $overall <= 1.9 )) 
				echo "<strong><span style='color:red'> Fail </span></strong>"; 
					
			if  (( $overall <= 0) || ( $overall >= 5.0 )) 
				echo "<strong> <span style='color:red'>Result Not Found</span></strong>"; 	
			
			?>
            
            </td>
          </tr>
          <tr><td height="24"> </td></tr>
          
          <tr>
            <td width="114"><strong>MARKS %</strong></td>
            <td width="81"><strong>GRADE</strong></td>
            <td width="58"><strong>POINTS</strong></td>
            <td width="576"><strong>DESCRIPTION</strong></td>
          </tr>
          <tr>
            <td>70% and Above</td>
            <td>A</td>
            <td>5.0</td>
            <td>Excellent</td>
          </tr>
          <tr>
            <td>60 - 69%</td>
            <td>B</td>
            <td>4.0</td>
            <td>Very Good</td>
          </tr>
          <tr>
            <td>50 - 59%</td>
            <td>C</td>
            <td>3.0</td>
            <td>Good</td>
          </tr>
          <tr>
            <td>45 - 49%</td>
            <td>D</td>
            <td>2.0</td>
            <td>Fair</td>
          </tr>
          <tr>
            <td>40 - 44%</td>
            <td>E</td>
            <td>1.0</td>
            <td>Pass</td>
          </tr>
          <tr>
            <td>Below 40%</td>
            <td>F</td>
            <td>0.0</td>
            <td>Failure</td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td><strong>CGPA</strong></td>
            <td colspan="2"><strong>DIPLOMA CLASS</strong></td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td>4.5 - 5.0</td>
            <td colspan="2">Distinction</td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td>3.5 - 4.49</td>
            <td colspan="2">Upper Credit</td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td>2.5 - 3.49</td>
            <td colspan="2">Lower Credit</td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td>1.0 - 2.49</td>
            <td colspan="2">Pass</td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td>Less than 0</td>
            <td colspan="2">Fail</td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td colspan="4"><strong><em> * Any Alteration on this Transcript Renders it Invalid *</em></strong></td>
            
          </tr>
          <tr><td colspan="4"><input type="button" value="Print" onclick="print()" style="cursor:pointer;" /></td></tr>
          
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
