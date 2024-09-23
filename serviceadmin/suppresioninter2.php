<?php
include '../model/connexion.php';
if(isset($_GET['id'])){
    $id=$_GET['id'];
    $sql="DELETE FROM intervention2 WHERE id='$id'";
    $delete=$connexion->prepare($sql);
    $delete->execute();
}
header('location:inter2.php');
?>
