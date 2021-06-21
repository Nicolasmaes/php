<?php
session_start();
if ($_SESSION['user_name']) {

    if ($_POST) {

        if (
            isset($_POST['picture']) && !empty($_POST['picture'])
        ) {
            require_once("db_connect.php");
            $picture = strip_tags($_POST['picture']);

            $sql = "INSERT INTO `test`(`picture`)VALUES(:picture)";

            $query = $db->prepare($sql);
            $query->bindValue(':picture', $picture, PDO::PARAM_STR);
            $query->execute();

            echo 'Everything is ok.';
            echo ' <br><a href="home.php">Back</a>';
        } else {
            echo 'Please fill every form';
        }
    } else {
        echo 'To access this page, you have to upload a project';
    }
} else {
    echo 'You are not logged in.';
}