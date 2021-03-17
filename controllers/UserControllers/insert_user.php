<?php

    include('../../config/db.php');
    include('../../models/Users.php');
    include('../../middlewares/StringHash.php');

    // mettre les names 

    $nom = HashingString($_POST['']);
    $prenom = HashingString($_POST['']);
    $mail = HashingString($_POST['']);
    $password = HashingString($_POST['']);
    $remember_password = HashingString($_POST['']);

    $tab = [];

    if (isset($_POST['submit'])) {

        $password = password_hash($password,PASSWORD_BCRYPT);

        array_push($tab,$nom,$prenom,$mail,$password);

        $VerifyUserExist = FindUserByEmail($connexion,$mail);

        if (count($VerifyUserExist) === 0) {

            $insertion = Create($connexion,$tab);

            if ($insertion) {

                $_SESSION['email'] = $mail;
                $_SESSION['password'] = $password;
                $_SESSION['nom'] = $nom;
                $_SESSION['prenom'] = $prenom;
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