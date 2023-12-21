<?php
    session_start();

    if (!isset($_SESSION['username'])) {
        $_SESSION['msg'] = "You must log in first";
        header("location: ../register/login.php");
    }

    if (isset($_GET["logout"])) {
        session_destroy(); 
        unset($_SESSION["username"]);
        header("location: ../register/login.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>
<body>
    
<div class="content">
    <!-- melding -->
    <?php if (isset($_SESSION["success"])): ?>
        <div class="error success">
            <h3>
                <?php 
                  echo $_SESSION['success'];
                  unset($_SESSION['success']);
                  ?>
                </h3>
    </div>
        <?php endif ?>

        <!-- user data -->
        <?php if (isset($_SESSION['username'])): ?>
            <h1>Welcome to our webshop <strong><?php echo $_SESSION['username']; ?></strong></h1>
            <p> <a href="webshop.php?logout='1'" style="color: red;">logout</a> </p>

            <?php endif ?>
        </div>


</body>
</html>