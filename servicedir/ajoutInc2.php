<?php
include 'entete/enteteincendie.php';
if(!empty($_GET['id']))
$article=getInc2($_GET['id']);
?>
<div class="home-content">
    <div class="overview-boxes">
    
        <div class="box">
            <form action="<?=!empty($_GET['id'])?'model/modifInc2.php':'model/ajoutInc2.php'?>" method="post">
                
                <label for="matricule">Matricule</label>
                <input type="number" value='<?= !empty($_GET['id']) ? $article['matricule'] : ""?>' name="matricule" id="matricule" placeholder="Veuillez entrez le matricule">
                <input  type="hidden" value='<?= !empty($_GET['id']) ? $article['id'] : ""?>' name="id" id="id" >


                <label for="nom">Nom</label>
                <input type="text" value='<?= !empty($_GET['id']) ? $article['nom'] : ""?>' name="nom" id="nom" placeholder="Veuillez entrez le nom">

                <label for="prenom">Prenom</label>
                <input type="text" value='<?= !empty($_GET['id']) ? $article['prenom'] : ""?>' name="prenom" id="prenom" placeholder="Veuillez entrez le prenom">

                <label for="pseudo">Pseudo</label>
                <input type="text" value='<?= !empty($_GET['id']) ? $article['pseudo'] : ""?>' name="pseudo" id="pseudo" placeholder="Veuillez entrez le pseudo">
                   
                <label for="numero_tel">Numero tel</label>
                <input  type="text" value='<?= !empty($_GET['id']) ? $article['numero_tel'] : ""?>' name="numero_tel" id="numero_tel" placeholder="Veuillez entrez le numero tel">
                 
                <label for="numero_cin">Numero CIN</label>
                <input  type="text" value='<?= !empty($_GET['id']) ? $article['numero_cin'] : ""?>' name="numero_cin" id="numero_cin" placeholder="Veuillez entrez le numero cin">
                                             
                <label for="date_embauche">Date de l'ambauche</label>
                <input type="date" value='<?= !empty($_GET['id']) ? $article['date_embauche'] : ""?>' name="date_embauche" id="date_embauche">

                <label for="adresse">Adresse</label>
                <input type="text" value='<?= !empty($_GET['id']) ? $article['adresse'] : ""?>' name="adresse" id="adresse" placeholder="Veuillez entrez l'adresse">
                
                <label for="situation_familial">Situation familial</label>
                <select name="situation_familial" id="situation_familial">
                    <option <?= !empty($_GET['id']) && $article['situation_familial']=="marie" ? "selected" : ""?> value="marie">marié</option>
                    <option <?= !empty($_GET['id']) && $article['situation_familial']=="celibataire" ? "selected" : ""?> value="celibataire">célibataire</option>
                </select>

                <label for="nbr_enfant">Nombre d'enfant</label>
                <input  type="text" value='<?= !empty($_GET['id']) ? $article['nbr_enfant'] : ""?>' name="nbr_enfant" id="nbr_enfant" placeholder="Veuillez entrez le nombre d'enfant">

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
    </div>

</div>

    <?php
session_destroy();
include 'pieds/pieds.php';
   ?>