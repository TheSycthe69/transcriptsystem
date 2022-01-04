<?php 
$query="";
$message="";
$con=mysql_connect("localhost","root","")or die(mysql_error());
	mysql_select_db("otdb")or die(mysql_error());

//(level,semester,matricno,course,courset,unit,score,point)
if(isset($_POST['add'])) {
		$query="INSERT INTO score
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

<style>
body{
  background-color:cornsilk;
}  
.addscore{
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
    .addscore ,.tablebox{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:sans-serif;
    padding-left:150px;
  }
 
  .container{
    max-width:700px;
    width:100%;
    background-color:burlywood;
    padding:25px 30px;
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
  .adscore .adding input{
        padding:5px;
        background:burlywood;
        text-decoration:none;
        float:right;
        margin-top: -30px;
        margin-right:40px;
        border-radius: 10px;
        font-size: 15px;
        font-weight: 600;
        color:cornsilk;
        transition:0.5s;
        transition-property: background;
    }
    
    .adscore .adding input {
            background:cornsilk;
            color:#6b3936
  

    }

    .upload input{
    display:inline;
    flex-wrap:wrap;
    padding:5px 20px;
    border-radius:5px;
    border:1px solid gray;
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

<form id="form1" name="form1" method="post" action="">
<?php include ('ahead.php')?>
  <div class="addscore"> 
    <div class="container">   
  <div class="con"><h2>Upload Scores</h2>
    <div class="add">
       <div class="upload">
         <span class="details">Level</span>
         <select name="level" id="session">
                <option value="ND 1">ND 1</option>
                <option value="ND 2">ND 2</option>
              </select><p>
       </div>
       <div class="upload">
         <span class="details">Semester</span>
         <select name="semester" id="semester"><p>
                <option value="fs" selected="selected">First Semester</option>
                <option value="ss">Second Semester</option>
              </select><p> 
       </div>
       <div class="upload">
         <span class="details">Matric No</span>
         <input required name="matricno" type="text" id="matricno"><P>
       </div>
       <div class="upload">
         <span class="details">Course</span>
         <input required name="course" type="text" id="matricno"><p>
       </div>
       <div class="upload">
         <span class="details">Course Title</span>
         <input required name="courset" type="text" id="matricno"><p>
       </div>
       <div class="upload">
         <span class="details">Course Unit</span>
         <select name="unit" id="unit">
         <option selected="selected">1</option><p>
              <option>2</option>
              <option>3</option>
              <option>4</option>
              <option>5</option>
         </select>     
       </div>
       <p>
       <div class="upload">
         <span class="details">Score</span>
         <input required name="score" type="text" id="score"><p>
       </div>
       <div class="upload">
         <span class="details">Point</span>
         <input required name="point" type="text" id="">
       </div>
       <div class="adding">
       <p><input type="submit" name="add" id="add" value="ADD"></p>
       </div>
       <p><?php echo $message ?></p>  
       
       
    </div>  
  </div>
  </div>
  </div>
     
    
</form>
<script type="text/javascript">
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1", "integer", {validateOn:["blur"]});
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2", "integer", {validateOn:["blur"]});
</script>
</body>
</html>