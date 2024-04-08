<?php

session_start();

if (isset($_SESSION["users_id"])) {
    
    $mysqli = require __DIR__ . "/login/database";
    
    $sql = "SELECT * FROM users
            WHERE id = {$_SESSION["users_id"]}";
            
    $result = $mysqli->query($sql);
    
    $users = $result->fetch_assoc();
}

?>
<!DOCTYPE html>
<html lang="en">
  <head> 
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home</title>
    <link rel="stylesheet" href="{{Asset('login_public/style.css')}}" />
  </head>
  <body>
    <h1>Hello</h1>

    @if (Auth::check())
    <p>Hello {{ Auth::user()->name }}</p>
    <p><a href = "/logout">Log out</a></p>
    @else
    <p><a href = "/login_success">Log in</a> or <a href ="/signup_after">Sign up</a></p>
    @endif

    </body>
</html>
