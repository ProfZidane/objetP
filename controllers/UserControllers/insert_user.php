<?php

    include('../../config/db.php');
    include('../../models/Users.php');
    include('../../middlewares/StringHash.php');


    $nom = HashingString($_POST['signup-name']);
    $prenom = HashingString($_POST['signup-prenom']);
    $mail = HashingString($_POST['signup-email']);
    $num = HashingString($_POST['signup-num']);
    $password = HashingString($_POST['signup-password']);
    //$remember_password = HashingString($_POST['']);

    $tab = [];

    if (isset($_POST['submit'])) {

        $password = password_hash($password,PASSWORD_BCRYPT);

        array_push($tab,$nom,$prenom,$mail,$num,$password);

        $VerifyUserExist = FindUserByEmail($connexion,$mail);

        if (count($VerifyUserExist) === 0) {

            $insertion = Create($connexion,$tab);

            if ($insertion) {
                session_start();
                $_SESSION['email'] = $mail;
                $_SESSION['password'] = $password;
                $_SESSION['nom'] = $nom;
                $_SESSION['prenom'] = $prenom;
                $_SESSION['num'] = $num;
                // ajouter téléphone de telephone
                header('Location: ../../profile.php?newuser=true');
            }

        } else {

            header('Location: ../../sign-up.php?status=500');

        }

        
    } else {

        header('Location: ../../sign-up.php?status=505');

    }

    

?>