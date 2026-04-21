<?php
$user_regEx = "/^[a-zA-Z]{1}[a-zA-Z0-9]{3,7}$/";
$password_regEX =  "/^[a-zA-Z0-9_]{6,8}$/";
$users_data = "data/users.txt";
function validate_user ($user_name, $password){
    global $user_regEx, $password_regEX;
    if (preg_match($user_regEx,$user_name) && preg_match($password_regEX,$password)){
        return true;
    }
    else
    {
        return false;
    }
}

function clean_input($data){
    return htmlspecialchars(strip_tags(trim($data)));
}
function clean_password($password){
    return htmlspecialchars(strip_tags($password));
}
?>