<form action="" method="post">
                
                <label for="matricule">Matricule</label>
                <input type="number" name="matricule" id="matricule" placeholder="Veuillez entrez le matricule">

                <label for="nom">Nom</label>
                <input type="text" name="nom" id="nom" placeholder="Veuillez entrez le nom">

                <label for="prenom">Prenom</label>
                <input type="text" name="prenom" id="prenom" placeholder="Veuillez entrez le prenom">

                <label for="pseudo">Pseudo</label>
                <input type="text" name="pseudo" id="pseudo" placeholder="Veuillez entrez le pseudo">
                   
                <label for="num_tel">Numero tel</label>
                <input  type="text" name="num_tel" id="num_tel" placeholder="Veuillez entrez le numero tel">
                 
                <label for="num_cin">Numero CIN</label>
                <input  type="text" name="num_cin" id="num_cin" placeholder="Veuillez entrez le numero cin">
                                             
                <label for="date_embauche">Date de l'ambauche</label>
                <input type="datetime-local" name="date_embauche" id="date_embauche">

                <label for="adresse">Adresse</label>
                <input type="text" name="adresse" id="adresse" placeholder="Veuillez entrez l'adresse">
                
                <label for="situation_familial">Situation familial</label>
                <select name="situation_familial" id="situation_familial">
                    <option value="marie">marié</option>
                    <option value="celibataire">célibataire</option>
                </select>

                <label for="nbr_enfant">Nombre d'enfant</label>
                <input  type="number" name="nbr_enfant" id="nbr_enfant" placeholder="Veuillez entrez le nombre d'enfant">

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