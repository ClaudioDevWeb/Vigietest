<?php
include 'entete/entetetls.php';
if(!empty($_GET['id']))
$article=getTls3($_GET['id']);
?>
<div class="home-content">
    <div class="overview-boxes">
    
    <div style="display:block;" class="box">
    <h1>EQUIPE TLS 3</h1>
            <form action="" method="get">
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
                    </tr>
                    <tr>
                        <td>
                            <input type="number" name="matricule" id="matricule">
                        </td>
                        <td>
                            <input type="text" name="nom" id="nom">
                        </td>
                        <td>
                            <input type="text" name="prenom" id="prenom">
                        </td>
                        <td>
                            <input type="text" name="pseudo" id="pseudo">
                        </td>
                        <td>
                            <input type="text" name="numero_tel" id="numero_tel">
                        </td>
                        <td>
                            <input type="text" name="numero_cin" id="numero_cin">
                        </td>
                        <td>
                            <input type="date" name="date_embauche" id="date_embauche">
                        </td>
                        <td>
                            <input type="text" name="adresse" id="adresse">
                        </td>
                        <td>
                            <select name="situation_familial" id="situation_familial">
                                <option ></option>
                                <option <?= !empty($_GET['id']) && $article['situation_familial']=="marie" ? "selected" : ""?> value="marie">marié</option>
                                <option <?= !empty($_GET['id']) && $article['situation_familial']=="celibataire" ? "selected" : ""?> value="celibataire">célibataire</option>
                            </select>
                        </td>
                        <td>
                            <input type="text" name="nbr_enfant" id="nbr_enfant">
                        </td>
        
                    </tr>
                    </table>
                 <br>
            <button type="submit">Valider</button> 
            </form> 
              <br>  
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
                    <?php
                      if (!empty($_GET)) {
                        $tls3=getTls3(null,$_GET);
                    }else{
                        $tls3=getTls3();
                    }
            

                    if(!empty($tls3) && is_array($tls3))
                    {
                        foreach($tls3 as $key=>$value){
                    ?>
                            <tr>
                                <td><?=$value['matricule']?></td>
                                <td><?=$value['nom']?></td>
                                <td><?=$value['prenom']?></td>
                                <td><?=$value['pseudo']?></td>
                                <td><?=$value['numero_tel']?></td>
                                <td><?=$value['numero_cin']?></td>
                                <td><?=date('d/m/Y H:i:s',strtotime($value['date_embauche']))?></td>
                                <td><?=$value['adresse']?></td>
                                <td><?=$value['situation_familial']?></td>
                                <td><?=$value['nbr_enfant']?></td>
                                <td><a href="ajoutTls3.php?id=<?=$value['id']?>"><i class='bx bx-edit-alt'></i></a></td>
                            </tr>
                        
                  <?php
                  }
                    }
                    ?>


                </table>
            </div>


        </div>
    </div>

</div>

    <?php
include 'pieds/pieds.php';
   ?>

