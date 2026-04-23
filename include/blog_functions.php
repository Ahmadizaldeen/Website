<?php
require_once __DIR__."/../include/if_session.php";
require_once __DIR__."/../tools/validation.php";
require_once __DIR__."/../include/config.php";
?>

<?php # form-Data handling function 
$autor = $_SESSION['user_data']['firstname'] . " " . $_SESSION['user_data']['lastname'];
$blogs_file = "../data/blogs.txt";

if(isset($_POST['save'])){
	if(!empty($_POST['title'])&& !empty($_POST['inhalt'])){
        $title = clean_input($_POST['title']);
        $inhalt = clean_input($_POST['inhalt']);
        $blog_data = array(
            'user_name' => $_SESSION['user_data']['user_name'],
            'autor' => $autor,
            'title' => $title,
            'inhalt' => $inhalt,
            'timestamp_id' => time()
        );
        save_blog($blogs_file, $blog_data);
        header("Location: ".BASE_URL."/pages/home.php");
        exit;
        }
        else {
            $error_message = "please fill in all fields";
        }
}
?>