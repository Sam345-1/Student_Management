
<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>student Management</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../css/my.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<script>
function getCookie(cname) {
  let name = cname + "=";
  let decodedCookie = decodeURIComponent(document.cookie);
  let ca = decodedCookie.split(';');
  for(let i = 0; i <ca.length; i++) {
    let c = ca[i];
    while (c.charAt(0) == ' ') {
      c = c.substring(1);
    }
    if (c.indexOf(name) == 0) {
      return c.substring(name.length, c.length);
    }
  }
  return "";
}
  function show(){
    document.cookie = "Name=" + "<?php $n = $_SESSION['UserName']; echo $n; ?>;";
    cookie = getCookie("Name");
      document.getElementById("greet").innerHTML = "Welcome " +cookie;
  }
  function cookiedel(){
    document.cookie = " " + "expiry = Thu, 01 Jan 1970 00:00:00 UTC;path=/;" ; 
  }
</script>
<body onload="show()">

   <div class="text-center container-fluid" >
    <div class="sys-back">
  <h1>Student Management System</h1>

  <h1 id="greet"> </h1>
</div> 
<br>
<div class="container ">
<div class=" text-center boxes">
  <div class="button">
    <a href="../serverpages/StudentRegForm.html" class="btn-box">Register Student</a>
    <a href="../serverpages/TeacherRegForm.html" class="btn-box">Register Staff</a>
  </div>
 </div>
</div>
<br>
<?php

  $con = mysqli_connect("localhost","root","","student_management");
  $data1= mysqli_query($con,"SELECT * FROM student ");
  $data2= mysqli_query($con,"SELECT * FROM staff ");
  $data3= mysqli_query($con,"SELECT * FROM dept ");

echo "<div class=\"container\"><h1>Student Details</h1>";

  if(mysqli_num_rows($data1)>0){
    echo " <table class=\"table \">
    <thead>
      <tr >
        
        <th >Roll Number</th>
        <th >First Name</th>
        <th >Last Name</th>
        <th >Department name</th>
        <th >Semester</th>
       
      </tr>
    </thead>
    <tbody>
      <tr scope=\"row\">
    
  ";
  while($row1 = mysqli_fetch_array($data1)){
    echo " <td>". $row1['ID']. "</td><td>". $row1['First_Name']. "</td><td>". $row1['Last_Name'].  "</td><td>". $row1['DeptName']. "</td> <td>" .$row1['Semester']. "</td></tr>";
  }
   echo "</tbody></table></div>"; 
}
  else{
    echo "<h2>No data</h2>";
}
echo "<br><div class=\"container\"><h1>Staff Details</h1>";

  if(mysqli_num_rows($data2)>0){
    echo " <table class=\"table \">
<thead>
  <tr>  
    <th >Staff Id</th>
    <th >Staff Name</th>
    <th >Department Id</th>
  </tr>
</thead>
<tbody>
  <tr scope=\"row\">
";

    while($row2 = mysqli_fetch_array($data2)){
        echo " <td>". $row2['Staff_id']. "</td><td>". $row2['Staff_Name']. "</td><td>". $row2['Dept_id']. "</td></tr>";
      }
echo "</tbody></table></div>";

  }       
  else{
    echo "<h2>No data</h2>";
}
echo "<br><div class=\"container\"><h1>Department Details</h1>";

if(mysqli_num_rows($data3)>0){
  echo " <table class=\"table \">
<thead>
  <tr>  
    <th >Department Id</th>
    <th >Department Name</th>
  </tr>
</thead>
<tbody>
  <tr scope=\"row\">
";
  while($row3 = mysqli_fetch_array($data3)){
        echo " <td>". $row3['Id']. "</td><td>". $row3['DeptName']. "</td></tr>";
      }
echo "</tbody></table></div>";

}
else{
  echo "<h2>No data</h2><br>";
       }
?>
<br>
<div class="container">
  <div class="text-right">
<button type="submit"  name="logout" onclick = "cookiedel()" class="btn btn-primary "><a class= "back-white "href="logout.php"><h3 >Logout</h3></a></button>
      </div>
      </div>
      <br>
      <br>
</body>
</html