<?php
include '../model/connexion.php';
if(isset($_GET['id'])){
    $id=$_GET['id'];
    $sql="DELETE FROM tech_video WHERE id='$id'";
    $delete=$connexion->prepare($sql);
    $delete->execute();
}
header('location:techvideo.php');
?>
