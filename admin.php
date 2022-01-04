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

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Admin Page</title>
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
<link rel="stylesheet" href="style.css">
<style >
     
      
      body{
            background:url(./image.admin3.jpg);
      }


</style>
</head>

<body>
<form id="form1" name="form1" method="post" action="">
  <?php include ('ahead.php')?>
      <div class="admin_pix">
            <img src="./images/admin3.jpg" alt="" width="100%" >
      </div>
    
</form>
</body>
</html>