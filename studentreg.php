<?php

$query = "";
$message = "";

$con=mysql_connect("localhost","root","")or die(mysql_error());
	mysql_select_db("otdb")or die(mysql_error());


if(isset($_POST['Submit'])) {
		$query="INSERT INTO student(surname,firstname,othername,gender,phoneno,email,matricno,password,course,level)
		 VALUES('"
		.$_POST['surname']."',
		'".$_POST['firstname']."',
		 '".$_POST['othername']."', 
		'".$_POST['gender']."',
	    '".$_POST['phoneno']."', 
		'".$_POST['email']."',
	    '".$_POST['matricno']."',
		'".$_POST['password']."', 
		'".$_POST['course']."',
		'".$_POST['level']."'
		
		 );";
		mysql_query($query) or die("Error in Registration<hr>".mysql_error());
		////
		
		    $im_folder = "C:/xammmp/htdocs/transcriptsystem/upload";

		
        if(is_uploaded_file($_FILES['pict']['tmp_name'])){		
          move_uploaded_file($_FILES['pict']['tmp_name'],$im_folder . "/" . $_POST['matricno'].".jpg");
        }
        else{
          echo "The photo could not be uploaded, Please go back and try again";
          exit;
        }
       //////
       header("Refresh: 0; URL=registrationform.php?surname=".$_POST['matricno']);    
     //}
   }
;   
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>


<script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<script type="text/javascript">
function MM_validateForm() { //v4.0
  if (document.getElementById){
    var i,p,q,nm,test,num,min,max,errors='',args=MM_validateForm.arguments;
    for (i=0; i<(args.length-2); i+=3) { test=args[i+2]; val=document.getElementById(args[i]);
      if (val) { nm=val.name; if ((val=val.value)!="") {
        if (test.indexOf('isEmail')!=-1) { p=val.indexOf('@');
          if (p<1 || p==(val.length-1)) errors+='- '+nm+' must contain an e-mail address.\n';
        } else if (test!='R') { num = parseFloat(val);
          if (isNaN(val)) errors+='- '+nm+' must contain a number.\n';
          if (test.indexOf('inRange') != -1) { p=test.indexOf(':');
            min=test.substring(8,p); max=test.substring(p+1);
            if (num<min || max<num) errors+='- '+nm+' must contain a number between '+min+' and '+max+'.\n';
      } } } else if (test.charAt(0) == 'R') errors += '- '+nm+' is required.\n'; }
    } if (errors) alert('The following error(s) occurred:\n'+errors);
    document.MM_returnValue = (errors == '');
} }
</script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
<style>
    body{
    margin:0;
    padding:0;
    font-family:"Roboto", sans-serif;
    background:cornsilk;
   
}

header{

    position:fixed;
    background:#6b3936;
    padding:20px;
    width:100%;
    height:30px;
}
.left_area h3{
    color:#fff;
    margin:0;
    text-transform:uppercase;
    font-size:22px;
    font-weight:900;

}

.left_area span{
    color:burlywood;

}
.left_area h3{
    color:cornsilk;

}
.logout_btn{
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

.logout_btn:hover{
        background:cornsilk;
        color:#6b3936
        
}
.sidebar{
    background:burlywood;
    margin-top:70px;
    padding-top:30px;
    position:fixed;
    left:0;
    width:250px;
    height:100%;

}
 
.sidebar.profile_image{
    
    width:100px;
    height:100px;
    border-radius: 100px;
    margin-bottom: 10px;
    
}

.sidebar h4{
    color:#6b3936;;
    margin-top:0;
    margin-bottom: 20px;
}

.sidebar a{
    color:brown;
    display: block;
    width:100%;
    line-height:60px;
    text-decoration: none;
    padding-left:40px;
    box-sizing:border-box;
    transition:0.5s;
    transition-property: background;
}
.sidebar a:hover{
    background:#6b3936;
    color:burlywood;
    
}
  .sidebar i{
      padding-right:10px;
  }

  label #sidebar_btn{
      z-index: 1;
      color:black;
      position:fixed;
      cursor:pointer;
      left:350px;
      font-size:20px;
      margin:5px 0;
      transition:0.5s;
      transition-property: color;
  }
  label #sidebar_btn:hover{
  color:burlywood;
      
  }
  .sidebar{
    background:burlywood;
    margin-top: 70px;
    padding-top: 30px;
    position:flex;
    left:10;
    width:250px;
    height:100%;
    transition:0.5s;
    transition-property:left;
    
       }
   
#check:checked ~ .sidebar{
      left:-190px;
      
     
  }
  #check:checked ~ .sidebar a span{
    display:none;
}
#check:checked ~ .sidebar a {
    font-size:20px;
    margin-left:170px;
    width:80px;
    
}
#check{
    display:none;
}
   
  .new{
    margin-left:250px;
    background:cornsilk;   
    background-position: center;
    background-size: cover;
    height:100vh;
    transition:0.5s;
    display:flex;
    align-items:center;
    justify-content:center;
    padding-left:200px;
    
    
    }
 
    #check:checked ~ .new  {
    
    background-color:cornsilk;
    background-position: center;
    background-size: cover;
    height:100vh;
    transition:0.5s;
   
    
    }
    .new{
        margin-left:60px;


    }
       
#check:checked ~ .sidebar{
      left:-190px;
      
     
  }
  #check:checked ~ .sidebar a span{
    display:none;
}
#check:checked ~ .sidebar a {
    font-size:20px;
    margin-left:170px;
    width:80px;
    
}
#check{
    display:none;
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
    width:30px;
  }
    .new{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:sans-serif;
    padding-left:150px;
    display:flex;
    align-items:center;
  }
 
  .container{
    max-width:700px;
    width:100%;
    background-color:burlywood;
    padding:25px 30px;
    border-radius:5px;
    

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
  .container form.user-details{
    display:flex;
    flex-wrap:wrap;


  }
    .user-details input{
    display:inline;
    flex-wrap:wrap;
    border-radius:5px;
    padding:5px 20px;
    
    border:none;
  }
  .user-details .input-box{
width:calc(100% /2 - 20px);
  }
  .user-details .input-box{
    height:30px;
    width:100%;
  }
 
   



 

</style>


</head>

<body>

<input type="checkbox" id="check">
    <header>
        <label for="check">
            <i class="fa fa-bars"  id="sidebar_btn"></i>
        </label>
        <div class="left_area">
            <h3>Highland  <span> College</span></h3>
        </div>
        <div class="right_area">
            <a href="logout.php" class="logout_btn">Logout</a>

        </div >

    </header>
    <div class="sidebar">
        <center>
            <img src="./avatar2.jpg" class="profile_image" alt=""  width="100" height="100">
            <h4>ADMIN</h4>
        </center>
        <a href="admin.php"><i class="fa fa-home" aria-hidden="true"></i><span>Home</span></a>
        <a href="adminstudent.php"><i class="fa fa-list-ul" aria-hidden="true"></i><span>Student List</span></a>
        <a href="addscore.php"><i class="fa fa-plus-circle" aria-hidden="true"></i><span>Add Score</span></a>
        <a href="studentreg.php"><i class="fa fa-user-plus" aria-hidden="true"></i><span>Student Registration</span></a>
        <a href="first_transcript.php"><i class="fa fa-book" aria-hidden="true"></i><span>First Session</span></a>
        <a href="second_transcript.php"><i class="fa fa-book" aria-hidden="true"></i><span>Second Session</span></a>
        <a href="final_transcript.php"><i class="fa fa-certificate" aria-hidden="true"></i><span>Transcript</span></a>
       

    </div>
   
    
    
<main>
<form action="" method="post" enctype="multipart/form-data" name="form1" id="form1">

<div class="">
<div class="new">    
  <div class="container">
    <div class="title">Student Registration</div>
    <form action="#">
      <div class="user-details">
       <div class="input-box">
         <span class="details">Surname</span>
         <input name="surname" placeholder="" type="text" id="surname">
       </div>
       <div class="input-box">
         <span class="details">First Name</span>
         <input name="firstname" placeholder="" type="text" id="firstname">
       </div>
       <div class="input-box">
         <span class="details">Other Names</span>
         <input name="othername" placeholder="" type="text" id="othername">
       </div>
       <div class="input-box">
       <span class="details">Upload Passport </span>
         <input type="file" name="pict" id="pict" >
        
        
       </div><p>
       <div class="input-box">
         <span class="details">Gender</span>
         <select class="option" name="gender">
         <option selected="selected"></option>
            <option >Male</option>
            <option>Female</option>
        </select>
       </div>
       <div class="input-box">
         <span class="details">Phone Number</span>
         <input name="phoneno" placeholder="" type="text" id="phoneno">
       </div>
       <div class="input-box">
         <span class="details">Email</span>
         <input name="email" type="text" id="email" onblur="MM_validateForm('email','','R');return document.MM_returnValue">
       </div>
       <div class="input-box">
         <span class="details">Matric No</span>
         <input name="matricno" placeholder="" type="text" id="matricno">
       </div>
       <div class="input-box">
         <span class="details">Password</span>
         <span id="sprytextfield5">
         <input name="password" placeholder="" type="password" id="password">
         </span>
       </div>
       <div class="input-box">
         <span class="details">Course</span>
         <select class="option" name="course" >
         <option disabled="disabled" selected="selected" > </option>
            <option placeholder="Choose Option">Computer Hardware Engineering</option>
            <option>Computer Software Engineering</option>
            <option>Digital Multimedia</option>
            <option>Banking Operation</option>
            <option>Computer Networking and System Security</option>
         </select>
       </div>
      
       <div class="input-box">
         <span class="details">Level</span>
         <select class="option" name="level"> 
         <option disabled="disabled" selected="selected"> </option>
            <option>ND 1</option>
            <option>ND 2</option>
         </select>
       </div>
       
       </div>
      <div class="button">
        <input type="submit" name="Submit" value="Register">
      </div>
       </div>
      </div>
  </div>  
  
    
</div>    
   
</div>       
      
   
 
</form>
<script type="text/javascript">
var sprytextfield5 = new Spry.Widget.ValidationTextField("sprytextfield5", "integer", {validateOn:["blur"]});
var sprytextfield4 = new Spry.Widget.ValidationTextField("sprytextfield4", "integer", {validateOn:["blur"], hint:"phone no"});
var sprytextfield3 = new Spry.Widget.ValidationTextField("sprytextfield3", "none", {validateOn:["blur"]});
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1", "none", {validateOn:["blur"]});
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2", "none", {validateOn:["blur"]});
</script>
</body>
</html>
