<?php
function get_file_name(){
    return ucfirst(basename($_SERVER['SCRIPT_NAME'], '.php'));
}
?>