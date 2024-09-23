<?php
include 'entete.php';
?>
<div class="home-content">
    <div class="overview-boxes">
    
        <div class="box">
            <form action="" method="post">
                <label for="nom_article">Nom de l'article</label>
                <input  type="text" value='<?= !empty($_GET['id']) ? $article['nom_article'] : ""?>' name="nom_article" id="nom_article" placeholder="Veuillez entrez le nom de l'article">
                <input  type="hidden" value='<?= !empty($_GET['id']) ? $article['id'] : ""?>' name="id" id="id" >

                <label for="categorie">Categorie</label>
                <select name="categorie" id="categorie">
                    <option value="accesoire">accessoire</option>
                    <option value="imprimante">imprimante</option>
                    <option value="ordinateur">ordinateur</option>
                    <option value="composante">composante</option>
                </select>

                <label for="quantite">Quantite</label>
                <input  type="number" value='<?= !empty($_GET['id']) ? $article['quantite'] : ""?>' name="quantite" id="quantite" placeholder="Veuillez entrez le quantite">

                <label for="prix_unitaire">Prix unitaire</label>
                <input type="text" value='<?= !empty($_GET['id']) ? $article['prix_unitaire'] : ""?>' name="prix_unitaire" id="prix_unitaire" placeholder="Veuillez entrez le prix unitaire">

                <label for="date_expiration">Date d'expiration</label>
                <input type="datetime-local" value='<?= !empty($_GET['id']) ? $article['date_expiration'] : ""?>' name="date_expiration" id="date_expiration">

                <label for="date_fabrication">Date de fabrication</label>
                <input type="datetime-local" value='<?= !empty($_GET['id']) ? $article['date_fabrication'] : ""?>' name="date_fabrication" id="date_fabrication">

                <button type="submit">Valider</button>
                <?php
                if(!empty($_SESSION['message']['text']))
                {
                ?>
                        <div class="alert <?=$_SESSION['message']['type']?>">
                            <?=$_SESSION['message']['text']?>
                        </div>

                <?php
                }
                ?>

            </form>
            </div>
            <div class="box">
                <table class="mtable">
                    <tr>
                        <th>Matricule</th>
                        <th>Nom</th>
                        <th>Prenom</th>
                        <th>Pseudo</th>
                        <th>Numero tel</th>
                        <th>Numero CIN</th>
                        <th>Date d'ambauche</th>
                        <th>Adresse</th>
                        <th>Situation familial</th>
                        <th>Nombre d'enfant</th>
                        <th>Action</th>
                    </tr>


                </table>
            </div>


        </div>
    </div>

</div>

    <?php
include 'pieds.php';
   ?>
