<?php
//include auth_session.php file on all user panel pages
include("auth_session.php");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Dashboard - Client area</title>
    <link rel="stylesheet" href="ss.css" />
</head>
<body>
    <div class="form">
        <p><h1>Hey, <?php echo $_SESSION['username']; ?>!</h1></p>
        <p><h2>You are in user dashboard page.</h2><br><h3>Your notifications will appear here !</h3></p>
        <p><a href="logout.php">Logout</a></p>
        <p><a href="inr.php">Home</a></p>
    </div>
</body>
</html>
