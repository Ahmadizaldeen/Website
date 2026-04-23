<?php
require_once __DIR__."/../include/if_session.php";
require_once __DIR__."/../tools/validation.php";
require_once __DIR__."/../include/config.php";
?>

<?php
//print_r($_SESSION['user_data']);
$autor = $_SESSION['user_data']['firstname'] . " " . $_SESSION['user_data']['lastname'];
//echo $autor;

$blog_data = array(

);
$user_data = $_SESSION['user_data'];
//print_r($user_data);
$blogs_file = "../data/blogs.txt";
if (file_exists($blogs_file)){
    $blogs_contents = unserialize(file_get_contents($blogs_file));
    #$blogs_contents[$_POST[]] =
    //print_r($blogs_contents);
}
?>
<!--<h3> Funktionen : get_blogs($blogs_file) , get_blogs($blogs_file,$_SESSION['user_data']['user_name']) </h3><br>
<h3>get_blogs_count($blogs_file) ,  get_blogs_count($blogs_file,$_SESSION['user_data']['user_name']</h3>
<br><h3> save_blog($blogs_file, $blog_data ), get_user_count($blogs_file)</h3>
-->
<form action="" method ="post">
	<label for="user">title :</label>
	<input type= "text" name ="title" id ="title" ><br><br>
	<label for="password">Inhalt</label>
	<textarea name ="inhalt" id ="inhalt" rows="6" cols ="20"></textarea><br><br>
    <button type = "submit" name = "save"> save </button>
    
</form>
<?php
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
        header("Location: ".BASE_URL."/test/blogs_verwaltung.php");
        exit;
        }
        else {
            $error_message = "please fill in all fields";
        }

}


function save_blog($blogs_file, $blog_data ){
    $user_name = $blog_data['user_name'];
    $blogs =[];
    if (file_exists($blogs_file)){
        $data = file_get_contents($blogs_file);
        $blogs = unserialize($data);
    }
    if(!isset(($blogs[$user_name]))){
        $blogs[$user_name] = [];
    }
    $blogs[$user_name][] = $blog_data;
    file_put_contents($blogs_file,serialize($blogs));
    //echo "blog saved!";
}

function get_blogs($blogs_file, $user_name = null){
    if (file_exists($blogs_file)){
        $data = file_get_contents($blogs_file);
        //print_r($data);
        $blogs = unserialize($data) ?:[]; //data kann leer sein
        //print_r($blogs);
        if ($user_name == null){
        //print_r($blogs);     
        //echo "++++++++++++++++++++++++++++";
        return $blogs;
        }
        else{
          //  print_r($blogs);     
        //echo "+++++++++++++++++++user+++++++++";
        return $blogs[$user_name] ?? [];
        } 
        
    }
}
function get_user_count($blogs_file, $user_name= null){ #!!!!!!!!!!!!!
    if ($user_name == null){
        $data = file_get_contents($blogs_file);
        $blogs = unserialize($data);
        //echo "******************************";
        //print_r(count($blogs));
        //echo count(get_blogs($blogs_file));
        return count($blogs);// user anzahl (anzahl die keys in blogs array)
    }
    else {
        //echo count(get_blogs($blogs_file));
        return count(get_blogs($blogs_file, $user_name));
    }

}
function get_blogs_count($blogs_file, $user_name = null){
    if($user_name == null){
    $data = file_get_contents($blogs_file);
    $blogs = unserialize($data);    
    $total = 0;
    foreach ($blogs as $user => $posts) {
        $total += count($posts);
    }
    }
    else {
        $total = count(get_blogs($blogs_file, $user_name));
    }

    //echo "---------------------" . $total;
    return $total;
}
function show_blogs($blogs_file, $user_name = null){
    $blogs = get_blogs($blogs_file, $user_name);
    $all_blogs = [];

    if ($user_name != null){
        // User-Blogs: schon flach
        $all_blogs = $blogs;
    } else {
        // Alle Blogs: 2D → flach
        foreach ($blogs as $user => $user_blogs){
            foreach ($user_blogs as $blog){
                $all_blogs[] = $blog;
            }
        }
    }

    // neueste zuerst sortieren
    usort($all_blogs, function($a, $b){
        return $b['timestamp_id'] - $a['timestamp_id'];
    });

    // anzeigen
    foreach ($all_blogs as $blog){
        echo "<h3>".$blog['title']."</h3>";
        echo "<p>".$blog['inhalt']."</p>";
        echo "<small>Autor: ".$blog['autor']." | ".date("d.m.Y H:i:s", $blog['timestamp_id'])."</small><hr>";
    }
}
?>
<pre>
    <?php
    //print_r($blog_data); # aktulle beitrag
    /*echo "<hr>";
    echo "alle Blogs";
    print_r (get_blogs($blogs_file));# alle beiträge
    echo "<hr>";
    echo "user Blogs";
    print_r(get_blogs($blogs_file,$_SESSION['user_data']['user_name']));# user beiträge
    echo "<hr>";
    echo "Anzahl aller Blogs: ". get_blogs_count($blogs_file);
    echo "<hr>";
    //get_blogs_count($blogs_file);
    echo "<hr>";
    echo "Anzahl user Blogs: ". get_blogs_count($blogs_file,$_SESSION['user_data']['user_name']);
    echo "<hr>";
    */
    show_blogs($blogs_file);
    echo "<hr>";
    //print_r(get_blogs($blogs_file));
    ?>
</pre>