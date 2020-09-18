<?php
include ('../../../traitements/connexiondb.php');
session_start();
$pseudo = $_SESSION['pseudo'];
if (isset($pseudo)){

$idgallery = $_GET['id'];

$req = $bdd->prepare(" DELETE FROM rdegallery WHERE id_image = $idgallery");
$req->execute();
$req->closecursor();

header("Location: ../../admin.php?success=gallerydeleted");

}else{
  header('location: ../index.php');
}?>