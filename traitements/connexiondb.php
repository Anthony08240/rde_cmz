<?php

// connexion a la base de donnée 
try   {
  // Je me connecte à ma bdd
  $bdd = new PDO("mysql:host=db5000303615.hosting-data.io;dbname=dbs296602", 'PaPef:5F', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
  return $bdd;
}catch(Exception $e)
{
  // En cas d'erreur, un message s'affiche et tout s'arrête
        die('Erreur : '.$e->getMessage());
}

?>