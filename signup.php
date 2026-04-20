<form action="" method ="post">
    <label>salutation :</label>
	<input type="radio" id="mr" name="salutation" value="Mr">
	<label for="mr">Mr</label>
	<input type="radio" id="mrs" name="salutation" value="Mrs">
	<label for="mrs">Mrs</label><br>

    <label for = "firstname">First Name :</label>
    <input type = "text" name = "firstname" id = "firstname"><br>
    <label for = "lastname">Last Name :</label>
    <input type = "text" name ="lastname" id = "lastname"><br>
	<label for="user_name">user name : </label>
	<input type= "text" name ="user_name" id ="user_name"><br>
	<label for="password">password :</label>
	<input type= "password" name ="password" id ="password">
    <label for = "confirm_password">Confirm Password :</label>
    <input type= "password" name ="confirm_password" id ="confirm_password"><br>
    <button type = "submit" value ="signup" name = "submit" >Create Account</button>
    
</form>
<?php
$users_data = 'data/users.txt';
if(isset($_POST['submit'])){
	if(!empty($_POST['firstname'])&& !empty($_POST['lastname'])
        && !empty($_POST['user_name']) && !empty($_POST['password'])){
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
		$user_name = trim($_POST['user_name']);
		$password = ($_POST['password']);
        $salutation = $_POST['salutation'] ?? null;
        $confirm_password = $_POST['confirm_password'];
        if ($password != $confirm_password){
            echo 'passwords do not match';
            exit;
        }
        require_once "tools/validation.php";
        $is_valid = validate_user ($user_name, $password);
        if (!$is_valid){
            echo "Invalid user name or password";
            echo "User name must start with a letter and be 4-8 characters long. Password must be 6-8 characters long and can contain letters, numbers, and underscores.";
            exit;
        }
        else{
                $user_data = array(
                'salutation' => $salutation,
                'firstname' => $firstname,
                'lastname' => $lastname,
                'user_name' => $user_name,
                'password' => password_hash($password, PASSWORD_DEFAULT)
            );
            require_once "tools/user_data_administration.php";
            if (user_exists($users_data, $user_name)){
                echo "user already exists, please choose a different user name";
                exit;
            }
            else {
                save_user($users_data, $user_data);
            }

        }
        }
        else {
            echo "please fill in all fields";
            }
        }

?>