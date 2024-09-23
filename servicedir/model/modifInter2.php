<?php
include 'connexion.php';

if(!empty($_POST['matricule']) &&
!empty($_POST['nom']) &&
!empty($_POST['prenom']) &&
!empty($_POST['pseudo']) &&
!empty($_POST['numero_tel']) &&
!empty($_POST['numero_cin']) &&
!empty($_POST['date_embauche']) &&
!empty($_POST['adresse']) &&
!empty($_POST['situation_familial']) &&
!empty($_POST['nbr_enfant']) &&
!empty($_POST['id']))
{
$sql="UPDATE intervention2 set matricule=?,nom=?,prenom=?,pseudo=?,numero_tel=?,numero_cin=?,date_embauche=?,adresse=?,situation_familial=?,nbr_enfant=?
WHERE id=?";
$rq=$connexion->prepare($sql);

$rq->execute(array($_POST['matricule'],$_POST['nom'],$_POST['prenom'],$_POST['pseudo'],
$_POST['numero_tel'],$_POST['numero_cin'],$_POST['date_embauche'],$_POST['adresse'],$_POST['situation_familial'],$_POST['nbr_enfant'],$_POST['id']));


if($rq->rowCount()!=0)
{
    $_SESSION['message']['text']="modification de l'employ(é)e avec succé";
    $_SESSION['message']['type']="success";
}
else
{
    $_SESSION['message']['text']="rien à été modifié";
    $_SESSION['message']['type']="warning";
}
}
else
{
$_SESSION['message']['text']="une information obligatoire non renseigné";
$_SESSION['message']['type']="danger";
}
$_SESSION['authorise']='oui';
header('Location:../ajoutInter2.php');
?>