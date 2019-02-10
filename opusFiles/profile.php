<?php
session_start();
$link = mysqli_connect("shareddb-g.hosting.stackcp.net","employee-3237f9b4","athroughg123","employee-3237f9b4");
$uid = $_SESSION["uids"];
$query = "SELECT * from details where UID = '$uid'";
$raw_result = mysqli_query($link,$query);
$row = mysqli_fetch_row($raw_result);
	$fname = $row[1];
	$lname = $row[2];
	$mname = $row[3];
	$dob = $row[4];
$_SESSION["name"] = $fname." ".$mname." ".$lname;
$_SESSIONS["uids"] = $uid;

?>
<!DOCTYPE html>
<html>
<head>
	<title>Profile</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">    
  <style type="text/css">
    #back{
    	margin: 10px;
    }
    header{
    	border-bottom: 2px solid black;
    }
    #prof_img{
    	border: 2px solid black;
    	width: 17%;
    	height:225px;
    	border-radius: 5px;
    	margin: 3%;
    	padding: 10px;
    	float: right;	
    }
  .stu_det{
  		margin:20px;
  }
  .stu_contact{
  		width:40%;    	
    	display:block; 
    	height:175px;  
  }
  .stu_line{
  		width:100%;    	
  }
  .first_row{
  		float:center;    	
    	height:300px;   
  }  	
 </style>       
</head>
<body>
  <header>
   <a href="home.php" id="back" role="button" class="btn btn-primary"><i class="fas fa-arrow-left"></i> Back To Home</a>
  </header>
  <div class="container">
  <div class="first_row">
  <div id="prof_img">Hello! Photo Here </div>
  <div class="stu_det">
  <? 	
    echo '<div id="stu_name" style="font-size:40px;font-weight:bold;">'.$fname." ".$mname." ".$lname.'</div><br><div id="stu_uid" style="font-size:40px; font-weight:bold;">'.$uid.'</div>';
    echo '<br><div id="stu_dob" style="font-size:40px;font-weight:bold;">'.$dob.'</div>';
  ?>
  </div>
  </div>
  <br><br>  
  <div class="alert alert-success stu_contact" style="float:left">
    <p><strong>Current Contact Information</strong></p>
    <?  ?>   
  </div>
      
  <div class="alert alert-danger stu_contact" style="float:right">
    <p><strong>Emergency Contact Information</strong></p>
    <p><?  ?>
    </p>
  </div>
  <br>
  <div class="alert alert-info stu_line" style="float:left">
   
   <p><? echo "<p>Something about myself</p>" ?>
   </p>
  </div>
  </div>
  
</body>
</html>