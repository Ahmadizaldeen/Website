<?php
session_start(); // für automatische Anmeldung nach dem signup

require_once __DIR__."/include/config.php";
require_once __DIR__."/include/head.php";
require_once __DIR__."/include/header.php";

$users_data = 'data/users.txt';
require_once "tools/validation.php";
require_once "tools/user_data_administration.php";
?>
<nav>
<?php
require_once __DIR__."/include/navigation.php";
?>
<?php if(isset($_SESSION['user_data']) && $_SESSION['user_data'])
		require_once "../include/user_tools.php"; 
	else echo "<a href = '".BASE_URL."/login.php'>Login</a>"; ?>
</nav>
<?php
$error_message ="";
$firstname = $lastname = $user_name = $salutation = ""; // immer definiert für attribut value in Form

if(isset($_POST['submit'])){
	if(!empty($_POST['firstname'])&& !empty($_POST['lastname'])
        && !empty($_POST['user_name']) && !empty($_POST['password'])){
        $firstname = clean_input($_POST['firstname']);
        $lastname = clean_input($_POST['lastname']);
		$user_name = clean_input($_POST['user_name']);
		$password = clean_password($_POST['password']);//ohne trim für das Password
        $salutation = clean_input($_POST['salutation']) ?? null;
        $confirm_password =clean_password( $_POST['confirm_password']);
        if ($password != $confirm_password){
            $error_message = 'passwords do not match';
        }
        elseif (!validate_user ($user_name, $password)){
            $error_message = "Invalid user name or password <br>
            User name must start with a letter and be 4-8 characters long. Password must be 6-8 characters long and can contain letters, numbers, and underscores.";         
        }
        elseif (user_exists($users_data, $user_name)){
               $error_message = "user already exists, please choose a different user name";
        }
        else{
                $user_data = array(
                'salutation' => $salutation,
                'firstname' => $firstname,
                'lastname' => $lastname,
                'user_name' => $user_name,
                'password' => password_hash($password, PASSWORD_DEFAULT));
                save_user($users_data, $user_data);
                $_SESSION['user_data'] = $user_data;// für automatische Anmeldung nach dem signup
                header("Location: pages/home.php"); // nach dem Speichern zu home Seite
                exit;
            }
    }
    else {
        $error_message = "please fill in all fields";
    }
}
?>
<main>
<form action="" method ="post">
    <label>salutation :</label>
    <select name="salutation">
        <option value="">Select</option>
        <option value="Mr" <?= $salutation === 'Mr' ? 'selected' : '' ?>>Mr</option>
        <option value="Mrs" <?= $salutation === 'Mrs' ? 'selected' : '' ?>>Mrs</option>
    </select>
    <label for = "firstname">First Name :</label>
    <input type = "text" name = "firstname" id = "firstname" value="<?=$firstname?>"><br>
    <label for = "lastname">Last Name :</label>
    <input type = "text" name ="lastname" id = "lastname" value="<?=$lastname?>"><br>
	<label for="user_name">user name : </label>
	<input type= "text" name ="user_name" id ="user_name" value="<?=$user_name?>"><br>
	<label for="password">password :</label>
	<input type= "password" name ="password" id ="password">
    <label for = "confirm_password">Confirm Password :</label>
    <input type= "password" name ="confirm_password" id ="confirm_password"><br>
    <?php if ($error_message): ?>
        <p style="color: red;"><?= $error_message ?></p>
    <?php endif; ?>
    <button type = "submit" value ="signup" name = "submit" >Create Account</button>
    
</form>
</main>
<?php require_once __DIR__."/include/footer.php";?>	