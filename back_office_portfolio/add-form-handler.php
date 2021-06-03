<?php
session_start();
if ($_SESSION['user_name']) {

    if ($_POST) {

        if (
            isset($_POST['project_title']) && !empty($_POST['project_title']) &&
            isset($_POST['project_begin']) && !empty($_POST['project_begin']) &&
            isset($_POST['project_end']) && !empty($_POST['project_end']) &&
            isset($_POST['project_context']) && !empty($_POST['project_context']) &&
            isset($_POST['project_specs']) && !empty($_POST['project_specs']) &&
            isset($_POST['project_link_website']) && !empty($_POST['project_link_website']) &&
            isset($_POST['project_link_github']) && !empty($_POST['project_link_github'])
        ) {
            require_once("db_connect.php");
            $title = strip_tags($_POST['project_title']);
            $begin = strip_tags($_POST['project_begin']);
            $end = strip_tags($_POST['project_end']);
            $context = strip_tags($_POST['project_context']);
            $specs = strip_tags($_POST['project_specs']);
            $website_link = strip_tags($_POST['project_link_website']);
            $github_link = strip_tags($_POST['project_link_github']);


            $sql = "INSERT INTO `projects`(`project_title`,`project_begin`	
,`project_end`,`project_context`,`project_specs`,`project_link_website`,`project_link_github`)VALUES(:project_title,:project_begin,:project_end,:project_context,:project_specs,:project_link_website,:project_link_github)";
            $query = $db->prepare($sql);
            $query->bindValue(':project_title', $title, PDO::PARAM_STR);
            $query->bindValue(':project_begin', $begin, PDO::PARAM_STR);
            $query->bindValue(':project_end', $end, PDO::PARAM_STR);
            $query->bindValue(':project_context', $context, PDO::PARAM_STR);
            $query->bindValue(':project_specs', $specs, PDO::PARAM_STR);
            $query->bindValue(':project_link_website', $website_link, PDO::PARAM_STR);
            $query->bindValue(':project_link_github', $github_link, PDO::PARAM_STR);
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