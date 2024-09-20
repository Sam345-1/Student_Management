<?php
 if(isset($_POST["register"]))
 {
    $Roll = $_POST["roll"];
    $Fname=$_POST["firstname"];
    $Lname=$_POST["lastname"];
    $mobile=$_POST["mobile"];
    $email=$_POST["email"];
    $Uname=$_POST["username"];
    $Pass=md5($_POST["password"]);
    $Department=$_POST["dept"];
    $DeptId=$_POST["deptid"];
    $Semester=$_POST["sem"];
    $gender=$_POST["gender"];
    $Marks=$_POST["marks"];


    
    $con = mysqli_connect("localhost","root","","student_management");
    $data= mysqli_query($con,"INSERT INTO student (ID,First_Name, Last_Name, Mobile, Email, UserName, Password1, Semester, DeptName, DeptNo, Gender, Marks) VALUES ($Roll,'$Fname','$Lname',$mobile,'$email','$Uname','$Pass','$Semester','$Department',$DeptId,'$gender',$Marks)");
   if($data>0){
      echo "Registered successfully!";
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