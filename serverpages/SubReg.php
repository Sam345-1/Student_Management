<?php
 if(isset($_POST["register"]))
 {
    $Subid=$_POST["subid"];
    $Sub=$_POST["subn"];
    $DeptId=$_POST["deptid"];
    $Sem=$_POST["sem"];

    
    $con = mysqli_connect("localhost","root","","student_management");
    $data= mysqli_query($con,"INSERT INTO subjects (Subject_id, Subject_Name, Dept_id, Semester) VALUES ('$Subid','$Sub',$DeptId, $Sem)");
   if($data>0){
      echo "Subject Added Successfully!";
   }
    else{
   echo "Failed";
    }
 }

?>
<html>
    <head>
    <link rel="stylesheet" href="../css/my.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    </head>
    <body>
      <div class="container mt-5">
      <div class="text-center">
    <div class="button">
    <a href="../index.html" class="btn-box">Home Page</a>
</div>
</div>
  </div>
 </div>
</body>
</html>