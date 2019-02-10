<?php

/// This is the wrong code


if (session_id() == "") 
{ session_start(); }
    if ($link = mysqli_connect("shareddb-g.hosting.stackcp.net","employee-3237f9b4","athroughg123","employee-3237f9b4")){
         if($_SESSION["uids"] != ""){
            $uid = $_SESSION["uids"];
       		echo $uid;
           	$query1 = "SELECT * from student_marks where UID = '$uid' and Exam_Id = 'CIA1'";
            $raw_result1 = mysqli_query($link,$query1);

          	$query2 = "SELECT * from student_marks where UID = '$uid' and Exam_Id = 'CIA2'";
            $raw_result2 = mysqli_query($link,$query2);

            $query3 = "SELECT * from student_marks where UID = '$uid' and Exam_Id = 'ESE'";
            $raw_result3 = mysqli_query($link,$query3);	
			
            $num = mysqli_num_rows($raw_result1);
          if ($num != 0 ){

          }else{
            echo "No records found...";
          }
      }else{
        echo "connection failed";
      }

}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Marks</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">  
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"  crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script> 
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">    
  
    <style type="text/css">
    
    #back{
      margin: 10px;
    }
    header{
      border-bottom: 2px solid black;        
    }
    div{
      text-align:center;
      }
    table.mark_table{
      margin-left:auto;
      margin-right:auto;
    }
    table,th,td{
      border: 1px solid black;
      font-size:20px;
      } 
    td,th{
      
      height:30px;
      padding:5px;
      }
    </style>
</head>
<body>
  <header>
   <a href="home.php" id="back" role="button" class="btn btn-primary"><i class="fas fa-arrow-left"></i> Back To Home</a>
  </header>  
  <br><br>
  <div class="container">
  <table class="mark_table" border="0" cellspacing="2" cellpadding="2">
   	   	
   	<thead>
   	  <tr>
   		<th>No.</th>
   		<th>Subjects</th>
   		<th colspan="2">CIA 1</th>
        <th colspan = "2"> CIA 2</th>
        <th colspan="2">End Semester</th>          
   	  </tr>
      <tr>
        <th></th>
   		<th></th>
   		<th>Marks<br>Obtained</th>
        <th>Total<br>Marks</th>
        <th>Marks<br>Obtained</th>
        <th>Total<br>Marks</th>
        <th>Marks<br>Obtained</th>
        <th>Total<br>Marks</th>           
          
      </tr>
   	</thead>
    <?php
    $i=0;
    while($i<$num){    
    $row1 = mysqli_fetch_row($raw_result1);
    $row2 = mysqli_fetch_row($raw_result2);
    $row3 = mysqli_fetch_row($raw_result3);
    
    $sem_num  = $row1[3];
    $id = $row1[0];
    $course_id = $row1[1];
    $mark_cia_1 = $row1[4];
    $mark_cia_2 = $row2[4];
    $tot_cia = 20;
    
    $ese = $row3[4];
    $tot_ese = 60;
   
    }
    ?>    
   	<tbody>
   	  <td><? echo $i+1; ?></td>
      <td><? echo $course_id; ?></td>
      <td><? echo $mark_cia_1; ?></td>
      <td><? echo $tot_cia; ?></td>
      <td><? echo $mark_cia_2; ?></td>
      <td><? echo $tot_cia; ?></td>
      <td><? echo $ese; ?></td>
      <td><? echo $tot_ese; ?></td>
   	</tbody>
    
    <?php {
      $i++;
    }
    ?>
    <caption style="text-align:center">Marks for Sem <?php echo $sem_num; ?></caption>
   </table>
  </div>
  
  
  
</body>
</html>
