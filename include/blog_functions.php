<?php
require_once __DIR__."/../include/if_session.php";
require_once __DIR__."/../tools/validation.php";
require_once __DIR__."/../include/config.php";
?>

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
<?php
function save_post($blogs_file, $blog_data ){
    $user_name = $blog_data['user_name'];
    $posts =[];
    if (file_exists($blogs_file)){
        $data = file_get_contents($blogs_file);
        $posts = unserialize($data);
    }
    if(!isset(($posts[$user_name]))){
        $posts[$user_name] = [];
    }
    $posts[$user_name][] = $blog_data;
    file_put_contents($blogs_file,serialize($posts));   
}

function get_posts($blogs_file, $user_name = null){
    if (file_exists($blogs_file)){
        $data = file_get_contents($blogs_file);
        $posts = unserialize($data) ?:[]; //data kann leer sein
        if ($user_name == null){
            return $posts;
        }
        else{
            return $posts[$user_name] ?? [];
        } 
        
    }
}

function show_posts($blogs_file, $user_name = null){
    $posts = get_posts($blogs_file, $user_name);
    $all_posts = [];

    if ($user_name != null){
        // User-Blogs: schon flach
        $all_posts = $posts;
    } else {
        // Alle Blogs: 2D → flach
        foreach ($posts as $user => $user_posts){
            foreach ($user_posts as $post){
                $all_posts[] = $post;
            }
        }
    }

    // neueste zuerst sortieren
    usort($all_posts, function($a, $b){
        return $b['timestamp_id'] - $a['timestamp_id'];
    });

    // anzeigen
    foreach ($all_posts as $post){
        echo "<h3>".$post['title']."</h3>";
        echo "<p>".$post['inhalt']."</p>";
        echo "<small>Autor: ".$post['autor']." | ".date("d.m.Y H:i:s", $post['timestamp_id'])."</small><hr>";
    }
}
?>