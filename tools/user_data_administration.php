<?php 
$users_data = "data/users.txt";
function get_user($users_data, $user_name){

    if(!file_exists($users_data)) return false;

    $unserialized_user = unserialize(file_get_contents($users_data));
    if(array_key_exists($user_name, $unserialized_user)){
       return $unserialized_user[$user_name];
    }
    return false; // User nicht gefunden
}

function user_exists($users_data, $user_name){

    if(!file_exists($users_data)) return false;

    $unserialized_user = unserialize(file_get_contents($users_data));
    return array_key_exists($user_name, $unserialized_user);
}

function save_user($users_data, $user_data ){
    $user_name = $user_data['user_name'];
    //$password = $user_data['password']; // kommt gehasht an

    $existing = file_exists($users_data) ? unserialize(file_get_contents($users_data)) : [];
    $existing [$user_name]= $user_data; // neue User zum Array hinzufügen

    file_put_contents($users_data, serialize($existing));
    //echo "user saved!";
}



?>