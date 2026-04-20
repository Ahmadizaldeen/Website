<?php 
$users_data = "data/users.txt";
function get_user($users_data, $user_name){
    $unserialized_user = unserialize(file_get_contents($users_data));
    if(array_key_exists($user_name, $unserialized_user)){
       echo "user vorhanden, user nicht aktulsiert";
    }
    return $unserialized_user;
}

function user_exists($users_data, $user_name){
    $unserialized_user = unserialize(file_get_contents($users_data));
    if(array_key_exists($user_name, $unserialized_user)){
       return true;
    }
    else{
        return false;
    }
}

function save_user($users_data, $user_data ){
    $user_name = $user_data['user_name'];
    $password = $user_data['password']; // kommt gehasht an

    $existing = file_exists($users_data) ? unserialize(file_get_contents($users_data)) : [];
    $existing [$user_name]= $password; // neue User zum Array hinzufügen

    file_put_contents($users_data, serialize($existing));
    echo "user saved!";
}



?>