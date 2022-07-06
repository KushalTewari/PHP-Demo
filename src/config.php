<?php
    session_start();
    $users = array(
        'kushal@gmail.com' => '12345',
        'samar@gmail.com' => 'abcd',
        'ansh@gmail.com' => '123456',
    );
    $usersJSON = json_encode($users);

    if(isset($_POST['print']))
    {
        echo $usersJSON;
    }
?>