<?php
if ($_POST) {

if (
isset($_POST['author']) && !empty($_POST['author']) &&
isset($_POST['topic_article']) && !empty($_POST['topic_article']) &&
isset($_POST['content']) && !empty($_POST['content'])
) {
require_once("db_connect.php");
$author = strip_tags($_POST['author']);
$topic = strip_tags($_POST['topic_article']);
$content = strip_tags($_POST['content']);

$sql = "INSERT INTO topic(`author`,`object`,`text`)VALUES(:author, :topic_article, :content)";

$query = $db->prepare($sql);
$query->bindValue(':author', $author, PDO::PARAM_STR);
$query->bindValue(':topic_article', $topic, PDO::PARAM_STR);
$query->bindValue(':content', $content, PDO::PARAM_STR);
$query->execute();

echo 'Everything is ok.';
echo ' <br><a href="index.php">Back</a>';
} else {
echo 'Please fill every form';
}
} else {
echo 'To access this page, you have to upload a project';
}