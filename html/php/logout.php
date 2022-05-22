<?php
    session_start();
    if($_SESSION['activeUser'] && $_SESSION['activeUser'] != ''){
        $_SESSION['activeUser'] = '';
        header("Location: ../../index.php");
    }
?>