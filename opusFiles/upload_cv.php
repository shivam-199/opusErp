<?php

 $targetfolder = "CV/";

 $targetfolder = $targetfolder.basename( $_FILES['file']['name']) ;

 $ok=1;

$file_type=$_FILES['file']['type'];

if ($file_type=="application/pdf") {

 if(move_uploaded_file($_FILES['file']['tmp_name'], $targetfolder))

 {
    $message = "The file ". basename( $_FILES['file']['name']). " is uploaded";
    echo "<script type='text/javascript'>
    window.alert('$message');
    window.location.assign('home.php');
    </script>";
 }

 else {

 echo "Problem uploading file";

 }

}

else {

 echo "You may only upload PDF file.<br>";

}

function show_cv(){
    
    echo '<embed src="cv/1.pdf" type="application/pdf" width="100%" height="600px"/>';
    
}

?>