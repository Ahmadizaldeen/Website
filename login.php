<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

require_once __DIR__."/include/config.php";
require_once __DIR__."/include/if_session.php";
require_once __DIR__."/include/head.php";
require_once __DIR__."/include/header.php";


require_once "tools/user_data_administration.php";
?>
<nav>
<?php
require_once __DIR__."/include/navigation.php";
?>
</nav>
<main>
<?php
$users_data = "data/users.txt";
$error_message ="";
$user_name ="";//value in Form
if (isset($_POST['submit'])){
    $user_name = trim($_POST['user']);
    $password = $_POST['password'];

    if(user_exists($users_data,$user_name)){
        $user = get_user($users_data, $user_name);
        if(password_verify($password, $user['password'])){// starte session wenn gehastes password und eingegebene Passwort gleich sind
            $_SESSION['user']= $user_name;
            $_SESSION['user_data'] = $user; // für user tools und personalisierung
            header("Location: pages/home.php");// weiterleiten wenn login erfolgreich
            exit;
        }
        else{
            $error_message =  "Password incorrect";
        }
    }
    else {
    $error_message =  "User not Found!";
    }
}
?>

<form action="" method ="post">
	<label for="user">user name</label>
	<input type= "text" name ="user" id ="user" value="<?=$_SESSION['user'] ?? ''?>">
	<label for="password">password</label>
	<input type= "password" name ="password" id ="password" >
    <?php if ($error_message): ?>
        <p style="color: red;"><?= $error_message ?></p>
    <?php endif; ?>
    <button type = "submit" value ="login" name = "submit"> Login </button>
    
</form>
<span > Don't have an account? <a href = "signup.php">Sign up</a></span>
</main>
<?php require_once __DIR__."/include/footer.php";?>	