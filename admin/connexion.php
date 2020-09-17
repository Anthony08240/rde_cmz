<?php
session_start();
include('../include/connexiondbval.php');

$pseudo = $_POST['pseudo'];
$mdp = $_POST['mdp'];

$connexion = $bdd->prepare("SELECT pseudo, mdp FROM admin WHERE pseudo = :pseudo AND mdp = :mdp");
$connexion->execute(array(
    'pseudo' => $pseudo,
    'mdp' => $mdp
));

$resultat = $connexion->fetch();
$nbresultats = $connexion->rowCount();

if ($nbresultats == 1) {

    $_SESSION['pseudo'] = $resultat['pseudo'];

    header('location: admin.php');
} else {
    header('location: ../index.php');
}



?>