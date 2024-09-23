<?php
include '../model/connexion.php';
if(isset($_GET['id'])){
    $id=$_GET['id'];
    $sql="DELETE FROM tls3 WHERE id='$id'";
    $delete=$connexion->prepare($sql);
    $delete->execute();
}
header('location:tls3.php');
?>
