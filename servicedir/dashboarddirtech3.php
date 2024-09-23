<?php
include 'entete/entetetechnique.php';
include 'connexion/conn.php';
$tables = ['tech_video','tech_alarme'];
?>
<div class="home-content">
    <div class="overview-boxes">
    <div style="display:block;" class="box">
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
                                <option <?= !empty($_GET['id']) && $article['situation_familial']=="marie" ? "selected" : ""?> value="marie">marié</option>
                                <option <?= !empty($_GET['id']) && $article['situation_familial']=="celibataire" ? "selected" : ""?> value="celibataire">célibataire</option>
                            </select>
                        </td>
                        <td>
                            <input type="number" name="nbr_enfant" id="nbr_enfant">
                        </td>
                        <td>
                            <select name="service" id="service">
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
    
        <div class="box">
            
            <div class="box">
                <table class="mtable">
                    <tr>
            <th>Matricule</th>
            <th>Nom</th>
            <th>Prenom</th>
            <th>Pseudo</th>
            <th>Numero telephone</th>
            <th>Numero cin</th>
            <th>Date d'embauche</th>
            <th>Adresse</th>
            <th>Situation familial</th>
            <th>Nombre d'enfant</th>
            <th>Service</th>
                    </tr>
                    <?php
                   // Parcourir chaque table
foreach ($tables as $table) {
    $sql = "SELECT * FROM $table";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Ajouter les lignes au tableau HTML
        while ($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>" . $row["matricule"] . "</td>
                    <td>" . $row["nom"] . "</td>
                    <td>" . $row["prenom"] . "</td>
                    <td>" . $row["pseudo"] . "</td>
                    <td>" . $row["numero_tel"] . "</td>
                    <td>" . $row["numero_cin"] . "</td>
                    <td>" . $row["date_embauche"] . "</td>
                    <td>" . $row["adresse"] . "</td>
                    <td>" . $row["situation_familial"] . "</td>
                    <td>" . $row["nbr_enfant"] . "</td>
                    <td>" . $row["service"] . "</td>
                  </tr>";
        }
    } else {
        echo "<tr><td colspan='3'>0 résultats pour $table</td></tr>";
    }
}

// Fermer le tableau HTML
echo "</table>";

// Fermer la connexion
$conn->close();
                    ?>

                </table>
            </div>


        </div>
    </div>

</div>

    <?php
include 'pieds/pieds.php';
   ?>
