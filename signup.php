<?php
session_start(); // für automatische Anmeldung nach dem signup
$users_data = 'data/users.txt';
require_once "tools/validation.php";
require_once "tools/user_data_administration.php";
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
                header("Location: login.php"); // nach dem Speichern zu login
                exit;
            }
    }
    else {
        $error_message = "please fill in all fields";
    }
}
?>

<form action="" method ="post">
    <label>salutation :</label>
	<input type="radio" id="mr" name="salutation" value="Mr" <?= $salutation === 'Mr' ? 'checked' : '' ?>>
	<label for="mr">Mr</label>
	<input type="radio" id="mrs" name="salutation" value="Mrs" <?= $salutation === 'Mrs' ? 'checked' : '' ?>>
	<label for="mrs">Mrs</label><br>

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
