<?php
include '../model/connexion.php';
if(isset($_GET['id'])){
    $id=$_GET['id'];
    $sql="DELETE FROM tech_alarme WHERE id='$id'";
    $delete=$connexion->prepare($sql);
    $delete->execute();
}
header('location:techalarme.php');
?>
