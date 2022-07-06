<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <div style="display: flex;
    flex-direction: column;
    width: 100%;
    align-items: center;
    justify-content: center;
    min-height: 100vh;">
    <h1>LOGIN</h1>
    <label>Email: <input type="email" id="email" placeholder="Email address" /></label>   
    <label style="margin-top: 2%">Password: <input type="password" id="password" placeholder="Password" /></label>
    <button id="login" style="margin-top: 2%">Login</button>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="script.js"></script>
    <script>
        
    </script>
</body>
</html>