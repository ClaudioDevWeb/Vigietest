<?php
include '../model/connexion.php';
if(isset($_GET['id'])){
    $id=$_GET['id'];
    $sql="DELETE FROM intervention1 WHERE id='$id'";
    $delete=$connexion->prepare($sql);
    $delete->execute();
}
header('location:inter1.php');
?>
