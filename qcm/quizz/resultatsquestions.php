<?php

// réccupération de la session
session_start();

// connexion a la base de donnée 
include ('../../include/connexiondb.php');

// réccupération des variable 
$team = $_SESSION['team'];
$note = 0;
$note2 = 0;
$emplacement=$_GET['emplacement'];
date_default_timezone_set('Europe/Paris');
$time = date("H:i:s");

// condition 
if(isset($_POST['reponse'])) {

    // boucle sur reponse clé / valeur pour reccupéré la bonne réponse
    foreach ($_POST['reponse'] as $idquestion => $value) {
        $statut = $bdd->prepare("SELECT statut, points, id_question FROM reponses WHERE reponse_id = $value");
        $statut->execute();

        // boucle les résultat et fetch pour garder le résultat 
        while ($reponse = $statut->fetch()) {
            $thisquestion = $reponse['id_question'];
            $siunereponseestfausse = $bdd->prepare("SELECT points FROM reponses WHERE id_question = $thisquestion");
            $siunereponseestfausse->execute();

            // condition si la réponse et bonne 
            if ($reponse['statut'] == 1 ){ 

                $note = $note + $reponse['points'];

            }
        }
    }

    // requête avec filtre sur le nom de la team et l'emplacement
    $dejafait = $bdd->prepare("SELECT * FROM pointsqcm WHERE team_name = '$team' AND emplacement = '$emplacement'");
    $dejafait->execute();

    // je cherche si la réponse n'a pas deja etait répondu
    $count = $dejafait->rowCount();
    
    // condition si la réponse n'a pas était repondu j'insert en base de donnée 
    if($count==0) {

            // insertion en base de donnée 
            $insertpoints = $bdd->prepare("INSERT INTO pointsqcm (team_name, emplacement, points, heure, reponse)
                                            VALUES (:team_name, :emplacement, :points, :heure, :reponse)");
            $insertpoints->execute(array(
                'team_name' => $team,
                'emplacement' => $emplacement,
                'points' => $note,
                'heure' => $time,
                'reponse' => $_POST['reponse'][key($_POST['reponse'])]
            ));
            $insertpoints->closeCursor();

            // ont réccupère tout les résultat filtrer avec le nom de la team 
            $finduqcm = $bdd->prepare("SELECT * FROM pointsqcm WHERE team_name = '$team'");
            $finduqcm->execute();

            // je compte les résulatat qui en ressorte 
            $count2 = $finduqcm->rowCount();

            // condition si le résultat est égale a 16 (le qcm est términer)
            if ($count2==16) {

                // j'insère dans la base de donnée l'heur de fin filtrer sur le nom de la team 
                $heuredefin = $bdd->prepare("UPDATE rdeexpressregister
                                                SET heure_fin = :heure_fin
                                                WHERE team_name = :team_name");
                $heuredefin->execute(array(
                    'heure_fin' => $time,
                    'team_name' => $team
                ));
                $heuredefin->closeCursor();

                // je réccupère le nombre de point filtrer sur la nom de la team 
                $totalpoints = $bdd->prepare("SELECT points FROM pointsqcm WHERE team_name = '$team'");
                $totalpoints->execute();

                // je boucle les résultats 
                while ($data = $totalpoints->fetch()) {
                    $note2 = $note2 + $data['points'];
                }
                $totalpoints->closeCursor();

                // j'inssère en base de donnée le nombre de point filtré avec le nom de la team 
                $insertpoints = $bdd->prepare("UPDATE rdeexpressregister
                                                SET total = :total
                                                WHERE team_name = :team_name");
                $insertpoints->execute(array(
                'total' => $note2,
                'team_name' => $team
                ));
                $insertpoints->closeCursor();

        }
        // redirection a la fin du traitement 
            header('location: ../qcm.php?success=3');
    } else {
        header('location: ../qcm.php?success=2');
    }
}
else {
    echo "Vous n'avez entré aucune réponse";
}

?>