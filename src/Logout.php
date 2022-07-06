<?php
    session_start();

    if(isset($_POST['logout']))
    {
        unset($_POST['user']);
        echo "<script>location.href='index.php'</script>";
    }
?>