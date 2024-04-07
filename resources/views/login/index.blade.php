<?php

session_start();

if (isset($_SESSION["user_id"])) {
    
    $mysqli = require __DIR__ . "/login/database.php";
    
    $sql = "SELECT * FROM user
            WHERE id = {$_SESSION["user_id"]}";
            
    $result = $mysqli->query($sql);
    
    $user = $result->fetch_assoc();
}

?>
<!DOCTYPE html>
<html lang="en">
  <head> 
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home</title>
    <link rel="stylesheet" href="{{Asset('login/style.css')}}" />
  </head>
  <body>
    <h1>Hello</h1>

    <?php if (isset($user)): ?>

        <p>Hello <?= htmlspecialchars($user["name"]) ?></p>

        <p><a href = "login.logout">Log out</a></p>

    <?php else: ?>

        <p><a href = "login.login">Log in</a> or <a href ="login.signup">Sign up</a></p>

    <?php endif; ?>
    </body>
</html>
