<?php
require_once('db_connect.php');

//récupération des données de form
$name = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$confirmation = $_POST['confirmation'];


if($password==$confirmation){
    echo $name.'<br>'.$email.'<br>'.$password.'<br>'.$confirmation;
}else{
    echo'Les mots de passe ne correspondent pas.';
}