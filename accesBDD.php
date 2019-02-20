<?php
    function createUser($pNom, $pPrenom, $pMail, $pMDP)
    {
        $retour = false;
        $bdd = new PDO('mysql:host=localhost;dbname=questionnaire', 'root') or die('Erreur connexion à la base de données');
        $requete = "insert into utilisateurs(NULL, $pNom, $pPrenom, $pMail, $pMDP)";
        $retour = $bdd -> exec($requete);
        return $retour;
    }
?>
