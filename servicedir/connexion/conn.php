<?php
session_start();
//@$_SESSION['authorise']!='oui';
$nom_serveur="localhost";
$nom_base_de_donne="bd_gestion_des_listes_employee";
$utilisateur="root";
$password="";

// Créer une connexion
$conn = new mysqli($nom_serveur, $utilisateur, $password, $nom_base_de_donne);

// Vérifier la connexion
if ($conn->connect_error) {
    die("La connexion a échoué : " . $conn->connect_error);
}