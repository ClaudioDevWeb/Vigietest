<?php
session_start();
if($_SESSION["authoriser"]!="oui"){
    header("location:index.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>BIENVENUE SUR LES LISTES TLS GROUPE 1</h1>
</body>
</html>

