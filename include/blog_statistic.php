
<?php
$blogs_file = __DIR__ . "/../data/blogs.txt";
function get_user_count($blogs_file, $user_name= null){ 
    if ($user_name == null){
        $data = file_get_contents($blogs_file);
        $posts = unserialize($data);
        return count($posts);// user anzahl (anzahl die keys in blogs array)
    }
    else {
    
        return count(get_posts($blogs_file, $user_name));
    }
}
function get_posts_count($blogs_file, $user_name = null){
    if($user_name == null){
    $data = file_get_contents($blogs_file);
    $posts = unserialize($data);    
    $total = 0;
    foreach ($posts as $user => $user_posts) {
        $total += count($user_posts);
    }
    }
    else {
        $total = count(get_posts($blogs_file, $user_name));
    }
    return $total;
}
?>