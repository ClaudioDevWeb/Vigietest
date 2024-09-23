<?php
session_start();
//@$_SESSION['authorise']!='oui';
$nom_serveur="localhost";
$nom_base_de_donne="bd_gestion_des_listes_employee";
$utilisateur="root";
$password="";

try{
$connexion=new PDO("mysql:host=$nom_serveur;dbname=$nom_base_de_donne",$utilisateur,$password);
$connexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

return $connexion;
}
catch(Exception $e)
{
die("erreur de connexion".$e->getMessage());
}
?>