<?php 
session_start();

if (count($_POST)){

    $flag = true;

    $dbFile = file_get_contents("../database/userDb.json");
    $users = json_decode($dbFile);

	$username = isset($_POST['uName']) ? $_POST['uName'] : '';
    $email = isset($_POST['uEmail']) ? $_POST['uEmail'] : '';
    $password = isset($_POST['uPass']) ? $_POST['uPass'] : '';

    foreach($users as $value){
        if($value->username == $username){
            echo "Username already in use!";
            return;
        }
		if($value->email == $email){
            echo "Email already in use!";
            return;
        }
    }
    
    $users[] = ['username' => $username, 'email' => $email, 'password' => $password];
    $dbFile = json_encode($users);
    file_put_contents('../database/userDb.json', $dbFile);
	echo false;
}
?>