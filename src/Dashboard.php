<?php
    session_start();
    if(!isset($_SESSION['user']))
    {
        echo "<script>location.href='error.php'</script>";
        exit;
    }

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table id='result' style="margin-bottom: 3%"></table>

    <label>Search an email: <input type="text" id="search" /></label>
    <p>Suggestions: <span id="suggestions"></span></p>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="script.js"></script>
</body>
</html>
