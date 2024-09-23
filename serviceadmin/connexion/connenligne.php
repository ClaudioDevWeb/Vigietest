<?php
session_start();
//@$_SESSION['authorise']!='oui';
$nom_serveur="sql201.infinityfree.com";
$nom_base_de_donne="if0_37016332_gestion_employees";
$utilisateur="if0_37016332";
$password="Cloclo2024";

// Créer une connexion
$conn = new mysqli($nom_serveur, $utilisateur, $password, $nom_base_de_donne);

// Vérifier la connexion
if ($conn->connect_error) {
    die("La connexion a échoué : " . $conn->connect_error);
}
?>