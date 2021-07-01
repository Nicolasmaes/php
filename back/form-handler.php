<?php
session_start();
    if ($_POST) {

        if (
            isset($_POST['input_author']) && !empty($_POST['input_author']) &&
            isset($_POST['input_topic']) && !empty($_POST['input_topic']) &&
            isset($_POST['content']) && !empty($_POST['content'])
        ) {
            require_once("db_connect.php");
            $author = strip_tags($_POST['input_author']);
            $topic = strip_tags($_POST['input_topic']);
            $content = strip_tags($_POST['content']);

            $sql = "INSERT INTO article(`author`,`object`,`text`)VALUES(:input_author, :input_topic, :content)";

            $query = $db->prepare($sql);
            $query->bindValue(':input_author', $author, PDO::PARAM_STR);
            $query->bindValue(':input_topic', $topic, PDO::PARAM_STR);
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