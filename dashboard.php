<?php
session_start();
if (!isset($_SESSION["username"])) {
    header("Location: login.html");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Dashboard</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="box">
    <div class="login">
      <div class="loginBx">
        <h2><i>Welcome</i></h2>
        <p style="color:white;">Halo, <?php echo $_SESSION["username"]; ?> 👋</p>
        <a href="logout.php" style="color:#ff2770; font-weight:600;">Logout</a>
      </div>
    </div>
  </div>
</body>
</html>
