<?php
use  core\Database;
$title = $_POST['title'];

$content = $_POST['body'];

$author = $_POST['author'];
$user_id = $_SESSION['user_id'];

$banner = $_FILES['banner']['name'];
$banner = $author."_".$title."_".$banner;
$banner= str_replace(" ","_",$banner);
$category = $_POST['category'];

$date = date("d/m/y",time());

move_uploaded_file($_FILES['banner']['tmp_name'],base_path("resources/blog/$banner"));
$config = require base_path('config.php');
$db = new Database($config,"root","12345678");
$authorId= $db->query("select id from Author where user_id = ?",[$user_id])->fetch();
$authorId = $authorId['id'];
if(!$authorId){
    $db->query("insert into Author(name,user_id) values(?,?)",[$author,$user_id]);
    $authorId = $db->lastId();
}
$result = $db->query("insert into post(author,title,content,date,category,banner) values(?,?,?,?,?,?)",[$authorId,$title,$content,$date,$category,$banner]);

$message ="failed";
if ($result)
 $message = "successfull";
header('location: /blogs');
die();
?>