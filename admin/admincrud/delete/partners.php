<?php
include ('../../../include/connexiondbval.php');

session_start();
$pseudo = $_SESSION['pseudo'];
if (isset($pseudo)){

$idpartner = $_GET['id'];

$req = $bdd->prepare(" DELETE FROM rdepartners WHERE id_partner = $idpartner");
$req->execute();
$req->closecursor();

header("Location: ../../admin.php?success=partnerdeleted");

}else{
  header('location: ../index.php');
}?>