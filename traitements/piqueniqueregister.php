<?php

//include de ma connexion a la base de donnée
include('connexiondb.php');


//je réccupère mes donnée envoyé en post dans une variable
$establishment = !empty($_POST['etablissement']) ? $_POST['etablissement'] : NULL;
$name = !empty($_POST['name']) ? $_POST['name'] : NULL;
$firstname = !empty($_POST['firstname']) ? $_POST['firstname'] : NULL;
$tel = !empty($_POST['tel']) ? $_POST['tel'] : NULL;
$mail = !empty($_POST['mail']) ? $_POST['mail'] : NULL;
$verifmail = !empty($_POST['verifmail']) ? $_POST['verifmail'] : NULL;


//je vérifie si les 2 adresse mai corresponde
if($mail == $verifmail) {
  
    //si les email corresponde je prepare un inserte en bdd
    $balregistration = $bdd->prepare("INSERT INTO rdepiqueniquetregister (name, first_name, phone, mail, establishment )
                                      VALUES (:name, :first_name, :phone, :mail, :establishment)");
 
    //j'execute l'insert en base de donnée en passant par un tableau
    $balregistration->execute(array(
    ':name' => $name,
    ':first_name' => $firstname,
    ':phone' => $tel,
    ':mail' => $mail,
    ':establishment' => $establishment
    ));
    $balregistration->closeCursor();
    $idparticipant = $bdd->lastInsertId();

    
    //si il y a moin de 200 ligne le repas sera a 3€
    if ($idparticipant <= 200) {
        $objetinscrip = utf8_decode("Confirmation d'inscription au Pique-Nique");
        $messageinscrip = utf8_decode("Bonjour, votre inscription est bien prise en compte pour le Pique-Nique, le prix de votre repas sera de 3 euros. A très bientôt ! <br><br>Merci de ne pas répondre à ce mail, pour toute demande merci de vous rendre sur la page contact du site prévue à cet effet.");

        //j'envoie l'email de confirmation
        mail($mail, $objetinscrip, $messageinscrip);

        
    //si il y a plus de 200 ligne le repas sera a 5€
    } else {
        $objetinscrip2 = utf8_decode("Confirmation d'inscription au Pique-Nique");
        $messageinscrip2 = utf8_decode("Bonjour, votre inscription est bien prise en compte pour le Pique-Nique, le prix de votre repas sera de 5 euros. A très bientôt ! <br><br>Merci de ne pas répondre à ce mail, pour toute demande merci de vous rendre sur la page contact du site prévue à cet effet.");

        //j'envoie l'email de confirmation
        mail($mail, $objetinscrip2, $messageinscrip2);
    }

    
    //je redirige vers la page de pique nique avec un message de succes a l'inscription
    header('location: ../event_register_piquenique.php?success=1');
}

else {

    //si les 2 email ne corresponde pas je redirige vers la page d'inscription avec un message d'alert
    header('location: ../event_register_piquenique.php?success=2');
}

?>