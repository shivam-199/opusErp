<?php
if (session_id() == "") 
{ session_start(); }
$link = mysqli_connect("shareddb-g.hosting.stackcp.net","employee-3237f9b4","athroughg123","employee-3237f9b4");
if($_SESSION["uids"] != ""){
	$uid = $_SESSION["uids"];
	$query = "SELECT * from details where UID = '$uid'";
	$raw_result = mysqli_query($link,$query);
	$row = mysqli_fetch_row($raw_result);
		$fname = $row[1];
		$lname = $row[2];
		$mname = $row[3];
}else{
  	$name = $_SESSION["name"];
}
$name = $fname." ".$mname." ".$lname;

?>
<!DOCTYPE html>
<html>
<head>
	<title>Welcome</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="home2.css">
    <style>
.img-margin{
    margin:1px;
}
.img-size1{
    width:100px;
    height: 90px;
}
.card-img-top{
  height:120px;
}
.card-border{
    border: 1px solid black;
    border-radius: 2px;
    width: 102px;
    height: 152px;
}
.card-body{
    flex:1 1 auto;
    padding: 5px;
}
.card-size{
    width: 125px;
    padding: 2px;
}
.btn{
  font-size:17px;
  height : 40px;
  width: 100%;
}
@media screen and (max-width:798px){
.card-size{
    width: 110px;
    padding: 1px;
}
.card-img-top{
  height:100px;
}
a{
    word-wrap: break-word;
}
.btn{
  font-size:15px;
  height : 40px;
  width: 100%;
}
}
@media screen and (max-width:480px){
.card-size{
    width: 80px;
    padding: 1px;
  	
}
.card-img-top{
  height:80px;
  width:40px;
}

.btn{
  font-size:9px;
  height : 25px;
  width: 100%;
}
}
    </style>
    
</head>
<body>
<div class="container">
<h1 style="border-bottom:1px solid black" align="center">Hello <? echo " ".$name; ?> !</h1>
<br>
 <div class="row">
    <div class="col-2"></div>
    <div class="col-1">
    <!-- Profile-->
    <div class="card card-size" >
        <img class="card-img-top" src="images/profile.png" alt="Profile image" style="width:100%">
        <div class="card-body text-center">
          <a href="profile.php" class="btn btn-primary btn-block " role="button">Profile</a>
        </div>
    </div>
    </div>
    <div class="col-2"></div>
    <div class="col-1">
      <!-- CVs-->
        <div class="card card-size" >
            <img class="card-img-top" src="images/cv.jpg" alt="CV image" style="width:100%">
            <div class="card-body text-center ">
                <a href="upload_cv_interface.html" class="btn btn-primary btn-block " role="button">CV</a>
            </div>
        </div>    
    </div>
    <div class="col-2"></div>
    <div class="col1">
    
     <!-- Marks-->
    	<div class="card card-size" >
        	<img class="card-img-top" src="images/marksheet.png" alt="Profile image" style="width:100%">
        	<div class="card-body text-center ">
            	<a href="marks_table.php" class="btn btn-primary btn-block btn-primary" role="button">Marks</a>
        	</div>
    	</div> 
    </div>
    <div class="col-2"></div>          
 </div>
 <br><br>
 <div class="row">
        <div class="col-2"></div>
        <div class="col-1">
        <!-- Assignment-->
        <div class="card card-size" >
            <img class="card-img-top" src="images/assignment.png" alt="Assignment image" style="width:100%">
            <div class="card-body text-center">
              <a href="#" class="btn btn-primary btn-block btn-danger" role="button">Assignment</a>
            </div>
        </div>
        </div>
        <div class="col-2"></div>
        <div class="col-1">      
       
        <!-- Exam-->
        <div class="card card-size" >
            <img class="card-img-top" src="images/exam.png" alt="Exam image" style="width:100%">
            <div class="card-body text-center ">
                <a href="#" class="btn btn-primary btn-block btn-danger" role="button">Exam</a>
            </div>
        </div>
        </div>
        <div class="col-2"></div>
        <div class="col1">        
        <!-- Attendance-->
    <div class="card card-size" >
        <img class="card-img-top" src="images/attendance.png" alt="Profile image" style="width:100%">
        <div class="card-body text-center ">
            <a href="#" class="btn btn-primary btn-block btn-danger " role="button">Attendance</a>
        </div>
    </div>       
    
   </div>
        <div class="col-2"></div>          
     </div>
<br><br>
     <div class="row">
            <div class="col-2"></div>
            <div class="col-1">
            <!-- ECC status -->
            <div class="card card-size" >
                <img class="card-img-top" src="images/ecc.png" alt="Profile image" style="width:100%">
                <div class="card-body text-center">
                  <a href="#" class="btn btn-primary btn-block btn-danger" role="button">ECC</a>
                </div>
            </div>
            </div>
            <div class="col-2"></div>
            <div class="col-1">
            <!-- SIP status-->
            <div class="card card-size" >
                <img class="card-img-top" src="images/ngo.png" alt="Profile image" style="width:100%">
                <div class="card-body text-center ">
                    <a href="#" class="btn btn-primary btn-block btn-danger" role="button">SIP Status</a>
                </div>
            </div>
            </div>
            <div class="col-2"></div>
            <div class="col1">
            <!-- Logout-->
            <div class="card card-size" >
                <img class="card-img-top" src="images/logout.png" alt="Profile image" style="width:100%">
                <div class="card-body text-center ">
                    <a href="index.php" class="btn btn-primary btn-block " role="button">Logout</a>
                </div>
            </div>
            </div>
            <div class="col-2"></div>          
         </div>


</div>
</body>
