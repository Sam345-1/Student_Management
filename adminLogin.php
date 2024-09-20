<?php
if(isset($_POST["login"])){
    $user=$_POST["name"];
    $pass=$_POST["psw"];
    $con = mysqli_connect("localhost","root","","student_management");
    $data= mysqli_query($con,"SELECT * FROM stud_admin WHERE Username="user" AND Password="pass"");
    if($data>0){
        
    }else{
        
    }
}
?>