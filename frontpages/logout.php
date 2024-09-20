<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="../css/my.css">
    </head>
<body>

<?php
session_unset();
session_destroy();
?>
<h1 > Logged out Successfully</h1>
    <div class="button">
    <a href="../index.html" class="btn-box">Home Page</a>
  </div>
 </div>
</body>
</html>