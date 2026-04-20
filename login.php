<?php // session_start() und HTTP-header müssen for die Formular eingesetzt werden
session_start(); // Data in session speichern
require_once "tools/user_data_administration.php";
$users_data = "data/users.txt";

if (isset($_POST['submit'])){
    $user_name = trim($_POST['user']);
    $password = $_POST['password'];

    if(user_exists($users_data,$user_name)){
        $all_users = get_user($users_data, $user_name);
        if(password_verify($password, $all_users[$user_name]['password'])){// starte session wenn gehastes password und eingegebene Passwort gleich sind
            $_SESSION['user']= $user_name;
            header("Location: pages/home.php");// weiterleiten wenn login erfolgreich
            exit;
        }
        else{
            echo "Password incorrect";
        }
    }
    else {
    echo "User not Found!";
    }
}
?>

<form action="" method ="post">
	<label for="user">user name</label>
	<input type= "text" name ="user" id ="user">
	<label for="password">password</label>
	<input type= "password" name ="password" id ="password">
    <button type = "submit" value ="login" name = "submit"> Login </button>
    
</form>
<span > Don't have an account? <a href = "signup.php">Sign up</a></span>

