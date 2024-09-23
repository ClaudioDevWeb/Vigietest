<?php
include 'connexion/conn.php';
include 'ajoutTech.php';


// Obtenir les valeurs du formulaire
$table = $_POST['table'];
$matricule = $_POST['matricule'];
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$pseudo = $_POST['pseudo'];
$numero_tel = $_POST['numero_tel'];
$numero_cin = $_POST['numero_cin'];
$date_embauche = $_POST['date_embauche'];
$adresse = $_POST['adresse'];
$situation_familial = $_POST['situation_familial'];
$nbr_enfant = $_POST['nbr_enfant'];
$service = $_POST['service'];

// Valider et sécuriser les données
$table = $conn->real_escape_string($table);
$matricule = $conn->real_escape_string($matricule);
$nom = $conn->real_escape_string($nom);
$prenom = $conn->real_escape_string($prenom);
$pseudo = $conn->real_escape_string($pseudo);
$numero_tel = $conn->real_escape_string($numero_tel);
$numero_cin = $conn->real_escape_string($numero_cin);
$date_embauche = $conn->real_escape_string($date_embauche);
$adresse = $conn->real_escape_string($adresse);
$situation_familial = $conn->real_escape_string($situation_familial);
$nbr_enfant = $conn->real_escape_string($nbr_enfant);

// Créer la requête SQL
$sql = "INSERT INTO $table (matricule,nom,prenom,pseudo,numero_tel,numero_cin,date_embauche,adresse,situation_familial,nbr_enfant,service)
 VALUES ('$matricule','$nom','$prenom','$pseudo','$numero_tel','$numero_cin','$date_embauche','$adresse','$situation_familial','$nbr_enfant','$service')";

// Exécuter la requête
if ($conn->query($sql) === TRUE) {
    echo "Les données ont été ajoutées avec succès à la table $table.";
} else {
    echo "Erreur : " . $sql . "<br>" . $conn->error;
}
?>