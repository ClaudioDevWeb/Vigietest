<?php
include '../model/connexion.php';
if(isset($_GET['id'])){
    $id=$_GET['id'];
    $sql="DELETE FROM incendie1 WHERE id='$id'";
    $delete=$connexion->prepare($sql);
    $delete->execute();
}
header('location:inc1.php');
?>
