<?php 
error_reporting(0);
$query="";
$message="";
$con=mysql_connect("localhost","root","")or die(mysql_error());
	mysql_select_db("otdb")or die(mysql_error());
	
 $username=$_POST['username'];
 $password=$_POST['reg'];
 
if(isset($_POST['login']))
 
{
	    $query="SELECT *FROM admin WHERE username='".$username."' AND password='".$password."';";
	$result=mysql_query($query) or die(mysql_error());
	$row=mysql_fetch_array($result);
	if($row){
	session_start();
	//$_SESSION['name'] = $_POST['name'];
	$_SESSION["admin"]=$_POST["username"];
			$_SESSION["serial"]=serialize($admin);
	header("Refresh: 0; URL=admin.php");    
    }

	else
 	{
		$message="Please provide valid credentials";
	}
}
?>
<html>
<head>  
<title>Admin Login</title>
<link rel="stylesheet" type="text/css" href="style2.css">
</head>

<body>
  <div class="loginbox">
    <img src="avatar.png" class="avatar">
            <h1 >ADMIN</h1>
             <form id="form1" name="form1" method="post" action="alogin.php">
               <P></p>
                 <input name="username" placeholder=" Enter Username" type="text" id="username" >
               <p></p>
                 <input name="reg" placeholder=" Enter Password" type="password" id="reg" >
                <br> <input name="login" type="submit" id="login" value="Login" :hover>
               
                 <?php
                 if(isset($_POST['login'])&&($_POST['username'])==""&&($_POST['reg'])==""){
                   echo"<table>";
                   echo" <tr>";
                  echo" <td style=color:white>";
                 echo $message;
                  echo" </td>";
                 echo "</tr>" ;
                 echo"</table>" ;                 
                   
                    
                 }
                     
                 ?>
              
             
             </form>
  </div>
</body>
</html>
