<?php

    include('../../config/db.php');
    include('../../models/Users.php');

    // mettre les names 
    
    $mail = $_POST['login-email'];
    $password = $_POST['login-password'];


    $verifyUserEmail = FindUserByEmail($connexion,$mail);

    if (count($verifyUserEmail) === 0) {

        header('Location: ../../sign-in.php?error=emailNotFound');

    } else {


        var_dump($verifyUserEmail);
        
        if (password_verify($password,$verifyUserEmail[0]['passwordU'])) {
                session_start();
                $_SESSION['email'] = $mail;
                $_SESSION['password'] = $password;
                $_SESSION['nom'] = $verifyUserEmail[0]['nom'];
                $_SESSION['prenom'] = $verifyUserEmail[0]['prenom'];
                $_SESSION['num'] = $verifyUserEmail[0]['numtel'];
                header('Location: ../../profile.php?success=200');

        } else {

            header('Location: ../../sign-in.php?error=passwordError');

        }
    }
   

    

?>