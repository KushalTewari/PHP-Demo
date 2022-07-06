<?php
    session_start();
    $check = 0;
    if(isset($_POST['loginCreds']))
    {
        $currentUser = $_POST['loginCreds']['email'];
        $currentPassword = $_POST['loginCreds']['pass'];
        
        include 'config.php';
        $usersArray = json_decode($usersJSON);
        foreach ($usersArray as $key => $value)
        {
            if($key == $currentUser && $value == $currentPassword)
            {
                $_SESSION['user'] = array();
                echo "1";
                $check = 1;
            }
        }
        if($check==0)
        {
            echo "0";
        }
    }
?>