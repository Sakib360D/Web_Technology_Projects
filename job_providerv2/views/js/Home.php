<?php

    session_start();
    $userName=$_SESSION['userName'];  
?>
<DOCTYPE html>
<html>
<head>

</head>
<body>
    <h2 ><?php echo "Welcome ".$userName; ?></h2>
    <br>
    <a href="Logout.php">Logout</a>
</body>
</html>