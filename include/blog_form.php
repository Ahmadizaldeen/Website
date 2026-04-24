<?php require_once "blog_functions.php";?>
<form action="" method ="post">
	<label for="user">title :</label>
	<input type= "text" name ="title" id ="title" ><br><br>
	<label for="password">Inhalt</label>
	<textarea name ="inhalt" id ="inhalt" rows="6" cols ="20"></textarea><br><br>
    <button type = "submit" name = "save"> save </button>
</form>

<?php # form-Data handling function 
$autor = $_SESSION['user_data']['firstname'] . " " . $_SESSION['user_data']['lastname'];
$blogs_file = __DIR__ . "/../data/blogs.txt";

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
        save_post($blogs_file, $blog_data);
        header("Location: ".BASE_URL."/pages/home.php");
        exit;
        }
        else {
            $error_message = "please fill in all fields";
        }
}
?>