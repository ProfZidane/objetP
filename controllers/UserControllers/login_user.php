<?php

    include('../../config/db.php');
    include('../../models/Users.php');

    // mettre les names 
    
    $mail = $_POST[''];
    $password = $_POST[''];


    $verifyUserEmail = FindUserByEmail($connexion,$mail);

    if (count($verifyUserEmail) === 0) {

        header('Location: ../../sign-in.php?error=emailNotFound');

    } else {

        if (password_verify($password,$verifyUserEmail['passwordU'])) {
            
                $_SESSION['email'] = $mail;
                $_SESSION['password'] = $password;
                $_SESSION['nom'] = $verifyUserEmail[$nom];
                $_SESSION['prenom'] = $verifyUserEmail[$prenom];
                header('Location: ../../profile.php?success=200');

        } else {

            header('Location: ../../sign-in.php?error=passwordError');

        }
    }
   

    

?>