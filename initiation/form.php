<?php

  if(!empty($_POST[''])){ // si un post est vide, peu importe lequel.
    $name = $_POST['user_name'];
    $email = $_POST['user_mail'];
    $password = $_POST['user_password'];
    $message = $_POST['user_message'];
    $birthdate = $_POST['user_birthdate'];
    echo 'Je m\'appelle <span style="color:red"> '.$name.', </span> mon adresse e-mail est '.$email.'<br><br>'.$message.'<br><br>';
    $current_date = date('Y');
    $age = $current_date - $birthdate;
    echo 'J\'ai '.$age.' ans.';
  }else{
      echo 'error';
  }

$humeur = 'bien';
if($humeur == 'bien'){
echo 'Je vais bien.';
}else{
echo '<br><br>Je vais mal.';
}