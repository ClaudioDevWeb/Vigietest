<?php
include 'entete/enteteppl.php';

// Vérifier si une recherche est effectuée via GET
$searchData = !empty($_GET) ? $_GET : null;


$techVideoData = getTechVideo(null, $searchData);  // Appelle la fonction de recherche pour tech_video
$techAlarmeData = getTechAlarme(null, $searchData);  // Appelle la fonction de recherche pour tech_alarme
$tls1Data = getTls1(null, $searchData);
$tls2Data = getTls2(null, $searchData);
$tls3Data = getTls3(null, $searchData);
$int1Data = getInt1(null, $searchData);
$int2Data = getInt2(null, $searchData);
$inc1Data = getInc1(null, $searchData);
$inc2Data = getInc2(null, $searchData);

// Fusionner les résultats des deux tables
$combinedData = array_merge($techVideoData, $techAlarmeData,$tls1Data,$tls2Data,$tls3Data,
 $int1Data,$int2Data, $inc1Data,$inc2Data);
?>
<div class="home-content">
    <div class="overview-boxes">
    
    <div style="display:block;" class="box">
    <h1>LISTES COMPLETS DES EMPLOYEES</h1>
            <!-- Formulaire de recherche -->
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
                        <th>Service</th>
                    </tr>
                    <tr>
                        <td><input type="number" name="matricule" id="matricule"></td>
                        <td><input type="text" name="nom" id="nom"></td>
                        <td><input type="text" name="prenom" id="prenom"></td>
                        <td><input type="text" name="pseudo" id="pseudo"></td>
                        <td><input type="text" name="numero_tel" id="numero_tel"></td>
                        <td><input type="text" name="numero_cin" id="numero_cin"></td>
                        <td><input type="date" name="date_embauche" id="date_embauche"></td>
                        <td><input type="text" name="adresse" id="adresse"></td>
                        <td>
                            <select name="situation_familial" id="situation_familial">
                                <option ></option>
                                <option value="marie">Marié</option>
                                <option value="celibataire">Célibataire</option>
                            </select>
                        </td>
                        <td><input type="text" name="nbr_enfant" id="nbr_enfant">
                        </td>
                        <td>
                            <select name="service" id="service">
                                <option ></option>
                                <option <?= !empty($_GET['id']) && $article['service']=="TECH" ? "selected" : ""?> value="TECH">TECH</option>
                                <option <?= !empty($_GET['id']) && $article['service']=="TLS" ? "selected" : ""?> value="TLS">TLS</option>
                                <option <?= !empty($_GET['id']) && $article['service']=="OPS" ? "selected" : ""?> value="OPS">OPS</option>
                            </select>
                        </td>
                    </tr>
                </table>
                <br>
                <button type="submit">Valider</button>
            </form>
            <br>

            <!-- Tableau des résultats -->
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
                    <th>Service</th>
            
                </tr>

                <?php
                // Vérifier si des données existent dans les résultats combinés
                if (!empty($combinedData) && is_array($combinedData)) {
                    foreach ($combinedData as $value) {
                ?>
                        <tr>
                            <td><?= $value['matricule'] ?></td>
                            <td><?= $value['nom'] ?></td>
                            <td><?= $value['prenom'] ?></td>
                            <td><?= $value['pseudo'] ?></td>
                            <td><?= $value['numero_tel'] ?></td>
                            <td><?= $value['numero_cin'] ?></td>
                            <td><?= date('d/m/Y', strtotime($value['date_embauche'])) ?></td>
                            <td><?= $value['adresse'] ?></td>
                            <td><?= $value['situation_familial'] ?></td>
                            <td><?= $value['nbr_enfant'] ?></td>
                            <td><?= $value['service'] ?></td>
    
                        </tr>
                <?php
                    }
                }
                ?>
            </table>
        </div>
    </div>
</div>

<?php
include 'pieds/pieds.php';
?>