<?php

    /**
     * Model User (utilisateur)
    */

    // methode de creation
    // ajouter numero de telephone ...
    function Create($connexion,$tab) {
        $sql = "INSERT INTO utilisateurs(nom,prenom,email,numtel,passwordU,created_at) VALUES ('$tab[0]','$tab[1]','$tab[2]','$tab[3]','$tab[4]',NULL)";
        $req = $connexion->prepare($sql);
        $req->execute();

        return true;
    }


    // trouver un utilisateur par son email

    function FindUserByEmail($connexion,$email) {
        $sql = "SELECT * FROM utilisateurs WHERE email='$email'";
        $req = $connexion->prepare($sql);
        $req->execute();
        $data = $req->fetchAll();

        return $data;
    }


    // trouver un utilisateur par son id

    function FindUserById($connexion,$id) {
        $sql = "SELECT * FROM utilisateurs WHERE id='$id'";
        $req = $connexion->prepare($sql);
        $req->execute();
        $data = $req->fetchAll();

        return $data;
    }


    // changer mot de passe utilisateur

    function FindUserAndUpdatePassword($connexion,$id,$new_password) {
        $sql = "UPDATE utilisateurs SET passwordU='$new_password' WHERE id='$id'";
        $req = $connexion->prepare($sql);
        $req->execute();

        return true;
    }


?>