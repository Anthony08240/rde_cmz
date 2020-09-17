<?php
include ('../../../include/connexiondbval.php');

session_start();
$pseudo = $_SESSION['pseudo'];
if (isset($pseudo)){
    
$idtestimonial = $_GET['id'];

$req = $bdd->prepare(" DELETE FROM rdetestimonials WHERE id_testimonial = $idtestimonial");
$req->execute();
$req->closecursor();

header("Location: ../../admin.php?success=testimonialdeleted");

}else{
    header('location: ../index.php');
  }?>