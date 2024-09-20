<?php
session_start();
if(isset($_POST["loginStudent"])){
    $user=$_POST["name"];
    $pass=$_POST["psw"];
    $pass=md5($pass);
    $con = mysqli_connect("localhost","root","","student_management");
    $data = mysqli_query($con,"SELECT * FROM student WHERE Username = '$user' AND Password1 ='$pass' ");
    if(mysqli_num_rows($data)>0){
        $row=mysqli_fetch_assoc($data);
        $_SESSION["UserName"]=$user;
        $_SESSION["id"]=$row["ID"];
        header("Location:Studentpage.php");
    }
    else{
        echo "Please enter valid details";
    }
}
else if(isset($_POST["loginAdmin"])){
    $user = $_POST["name"];
    $pass = $_POST["psw"];
    $pass=md5($pass);
    $con = mysqli_connect("localhost","root","","student_management");
    $data= mysqli_query($con,"SELECT * FROM stud_admin WHERE Username = '$user' AND Password1 ='$pass' ");
    if(mysqli_num_rows($data)>0){
        $row=mysqli_fetch_assoc($data);
        $_SESSION["UserName"]=$user;
        $_SESSION["id"]=$row["ID"];
        header("Location:Adminpage.php");
    }else{
        echo "Please enter valid details";
    }
}
else if(isset($_POST["loginStaff"])){
    $user=$_POST["name"];
    $pass=$_POST["psw"];
    $pass=md5($pass);
    $con = mysqli_connect("localhost","root","","student_management");
    $data= mysqli_query($con,"SELECT * FROM staff WHERE Username = '$user' AND Password1 ='$pass' ");
    if(mysqli_num_rows($data)>0){
        $row=mysqli_fetch_assoc($data);
        $_SESSION["UserName"]=$user;
        $_SESSION["id"]=$row["ID"];
        header("Location:Staffpage.php");


    }else{
        echo "Please enter valid details";
    }
}
else{
    header("Location:index.html");
}

?>