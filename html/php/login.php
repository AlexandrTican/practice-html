<?php 
session_start();

if (count($_POST)){

    $dbFile = file_get_contents("../database/userDb.json");
    $users = json_decode($dbFile);

    $email = isset($_POST['uEmail']) ? $_POST['uEmail'] : '';
    $password = isset($_POST['uPass']) ? $_POST['uPass'] : '';

    foreach($users as $value){
        if($value->email == $email && $value->password == $password){
			$_SESSION['activeUser'] = $value->username;
            echo $value->username;
			return;
        }
    }
    
    echo false;
}
?>
