<?php
if(isset($_POST["register"])){
    $sid=$_POST['Id'];
    $name =$_POST["fname"];
    $Phone=$_POST["mobile"];
    $Email=$_POST["email"];
    $User =$_POST["username"];
    $Password=md5($_POST["password"]);
    $gender=$_POST["gender"];
    $Deptid=$_POST["deptid"];
    $con = mysqli_connect("localhost","root","","student_management");
    $data= mysqli_query($con,"INSERT INTO staff (Staff_id, Staff_Name, mobile, Email, Username, Password1, gender, Dept_id) VALUES ($sid,'$name',$Phone,'$Email','$User','$Password','$gender',$Deptid)");
    if($data>0){
        echo "Successful";
    }else{
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