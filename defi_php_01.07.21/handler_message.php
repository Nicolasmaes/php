<?php
if ($_POST) {

if (
isset($_POST['author']) && !empty($_POST['author']) &&
isset($_POST['content']) && !empty($_POST['content']) &&
isset($_POST['topic_id']) && !empty($_POST['topic_id'])

) {
require_once("db_connect.php");
$author = strip_tags($_POST['author']);
$content = strip_tags($_POST['content']);
$topic_id = strip_tags($_POST['topic_id']);

$sql = "INSERT INTO `message`(`author`, `text`,`topic_id`) VALUES(:author, :content, :topic_id )";

$query = $db->prepare($sql); 
$query->bindValue(':author', $author, PDO::PARAM_STR);
$query->bindValue(':content', $content, PDO::PARAM_STR);
$query->bindValue(':topic_id', $topic_id, PDO::PARAM_INT);
$query->execute();

echo 'Everything is ok.';
echo ' <br><a href="index.php">Back</a>';
} else {
echo 'Please fill every form';
}
} else {
echo 'To access this page, you have to upload a project';
}