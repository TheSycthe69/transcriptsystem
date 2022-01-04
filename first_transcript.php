 <?php
error_reporting(0);    
    $m="";
    if (isset($_GET['msg']))
    {
    $message=$_GET['msg'];
    
    if ($message == 1) 
   $m= "<font color=red> The Matric number is not available in Our Database </font> ";
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>contact</title>

<style>
 body{
  background-color:cornsilk;
}  
.addscor{
  margin-left:250px;
    background:cornsilk;
    background-position: center;
    background-size: cover;
    height:100vh;
    transition:0.5s;
    display:flex;
    align-items:center;
    padding-left:10rem;
}
.container .title {
    font-size:25px;
    font-weight:500;
    position:relative;
    display:flex;
    align-items:center;
  }

  .container .title:before{
    content:'';
    position:absolute;
    left:0;
    bottom:0;
    height:3px;
    width:30px;
  }
    .addscor{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:sans-serif;
    padding-left:150px;
  }
 
  .container{
    max-width:500px;
    width:100%;
    background-color:burlywood;
    padding:15px 15px;
    border-radius:5px;
    margin-left:250px;

  }
  .container .title {
    font-size:25px;
    font-weight:500;
    position:relative;
  }

  .container .title:before{
    content:'';
    position:absolute;
    left:0;
    bottom:0;
    height:3px;
 
   
  }
  



    .upload input{
    display:inline;
    flex-wrap:wrap;
    padding:5px 20px;
    border-radius:5px;
  }
  .upload input .input{
width:calc(100% /2 - 20px);
  }
  .upload input .input{
    height:30px;
    width:100%;
    
  }
  

 

</style>

</head>

<body>
<?php include('ahead.php')?>
<form method="post" action="stranscript.php">
  <div class="addscor">
    <div class="container">
      <div class="con"><h2>First Transcript</h2></div>
      <div class="upload">
         <span class="details">Matric No</span>
         <input name="student" required type="text" id="reg">
       </div>
      <p><input type="submit" name="Submit" value="     Go     "></p> 

           
</form> 
      </div>
    </div>  
  </div>  
 
     <p><?php if(isset($m)){ echo $m;} ?><p>
    
  

</body>
</html>
