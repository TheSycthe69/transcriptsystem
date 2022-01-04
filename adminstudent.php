<?php $con=mysql_connect("localhost","root","")or die(mysql_error());
	mysql_select_db("otdb")or die(mysql_error());
?>
<?php 
if(isset($_GET['del']))
{
$sql = "DELETE FROM student WHERE reg_no=".$_GET['matricno'].";";
mysql_query($sql)or die(mysql_error());
//$sql = "DROP TABLE ans_".$_GET['reg'].";";
//mysql_query($sql);
}
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>iExams</title>
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
<link rel="stylesheet" href="style.css">
    
    
  

<style >
 *{
   margin:0;
   padding:0;
 }
  .table-box{
    margin:50px ;
    margin-top:200;
    padding-left:150px;
    

  }
  .table-row{
    display:table;
    width:60%;
    margin:10px auto;
    font-family:sans-serif;
    background:transparent;
    padding:12px 0;
    color:#555;
    font-size:13px;
    box-shadow: 0 1px 4px 0 rgba(0,0,50,0.3);
  }
  .table-cell{
    display:table-cell;
    width:20%;
    text-align:center;
    padding:4px 0;
    border-right: 1px solid #d6d4d4;
    vertical-align:middle;
  }
  

</style>
</head>

<body>
<?php include('studentreg.php')?>
<div class="table-box">
  <div class="table-row">
    <div class="table-cell">
      <p>MATRIC NO</p>
    </div>
    <div class="table-cell">
      <p>FIRST NAME</p>
    </div>
    <div class="table-cell">
      <p>SURNAME</p>
    </div>
    <div class="table-cell">
      <p>GENDER</p>
    </div>
    <div class="table-cell">
      <p>COURSE</p>
    </div>

  </div>
  <?php
$sql = "SELECT *FROM student;";
$r = mysql_query($sql);
while($row = mysql_fetch_array($r))
{
extract($row);

 echo" <div class=table-row>";
   echo" <div class=table-cell>";
     echo "<p>$matricno</p>";
    echo"</div>";
   echo" <div class=table-cell>";
    echo" <p>$firstname</p>";
   echo" </div>";
    echo"<div class=table-cell>";
      echo"<p>$surname</p>";
    echo"</div>";
    echo"<div class=table-cell>";
     echo" <p> $gender</p>";
   echo" </div>";
    echo"<div class=table-cell>";
     echo" <p>$course</p>";
    echo"</div>";

  echo"</div>";
}
?>
 
  
   


	


</div>

</body>
</html>
