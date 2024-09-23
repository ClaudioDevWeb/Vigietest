<?php
session_start();
//@$_SESSION['authorise']!='oui';
$nom_serveur="sql201.infinityfree.com";
$nom_base_de_donne="if0_37016332_gestion_employees";
$utilisateur="if0_37016332";
$password="Cloclo2024";

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