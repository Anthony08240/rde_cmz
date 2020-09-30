<?php

//je cree une session start

session_start();

//include de ma connexion a ma base de donnée

include('../../traitements/connexiondb.php');

//je récupère mes donnée envoyé en post dans une variable

$teamname = htmlspecialchars($_POST['teamname']);
$password = htmlspecialchars($_POST['password']);

//je cherche dans ma base de donnée le nom de la team et le mot de passe

$connexion = $bdd->prepare("SELECT team_name, password_manif FROM rdeexpressregister WHERE team_name = :teamname AND password_manif = :password");
$connexion->execute(array(
    'teamname' => $teamname,
    'password' => $password
));

//je fetch le résultat

$resultat = $connexion->fetch();

//je compte le nombre de résultat

$nbresultats = $connexion->rowCount();

// si le nombre de resultat est égale a 1 c'est que mon nom de team existe

if ($nbresultats == 1) {

    //je rentre le nom d'équipe dans ma session

    $_SESSION['team'] = $resultat['team_name'];

    //et je redirige vers la page qcm

    header('location: ../qcm.php');

    // si le nombre de resultat et égale a 0 je redirige vers la page de connexion avec un message d'erreur

} else {
    header('location: ../index.php?success=1');
}



?>