<?php
include '../model/connexion.php';
if(isset($_GET['id'])){
    $id=$_GET['id'];
    $sql="DELETE FROM tls2 WHERE id='$id'";
    $delete=$connexion->prepare($sql);
    $delete->execute();
}
header('location:tls2.php');
?>
