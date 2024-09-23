function getTls1($id = null, $searchDATA = array())
{
    $conn = $GLOBALS['connexion']; // Connexion à la base de données

    if (!empty($id)) {
        $sql = "SELECT * FROM tls1 WHERE id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->execute([$id]);
        return $stmt->fetch();
    } elseif (!empty($searchDATA)) {
        $search = " WHERE 1=1";
        $params = [];

        extract($searchDATA);
        if (!empty($matricule)) {
            $search .= " AND matricule = ?";
            $params[] = $matricule;
        }
        if (!empty($nom)) {
            $search .= " AND nom LIKE ?";
            $params[] = "%$nom%";
        }
        if (!empty($prenom)) {
            $search .= " AND prenom LIKE ?";
            $params[] = "%$prenom%";
        }
        if (!empty($pseudo)) {
            $search .= " AND pseudo LIKE ?";
            $params[] = "%$pseudo%";
        }
        if (!empty($numero_tel)) {
            $search .= " AND numero_tel LIKE ?";
            $params[] = "%$numero_tel%";
        }
        if (!empty($numero_cin)) {
            $search .= " AND numero_cin LIKE ?";
            $params[] = "%$numero_cin%";
        }
        if (!empty($date_embauche)) {
            $search .= " AND DATE(date_embauche) = ?";
            $params[] = $date_embauche;
        }
        if (!empty($adresse)) {
            $search .= " AND adresse LIKE ?";
            $params[] = "%$adresse%";
        }
        if (!empty($situation_familial)) {
            $search .= " AND situation_familial LIKE ?";
            $params[] = "%$situation_familial%";
        }
        if (!empty($nbr_enfant)) {
            $search .= " AND nbr_enfant = ?";
            $params[] = $nbr_enfant;
        }
        if (!empty($service)) {
            $search .= " AND service LIKE ?";
            $params[] = "%$service%";
        }

        $sql = "SELECT * FROM tls1 $search";
        $stmt = $conn->prepare($sql);
        $stmt->execute($params);
        return $stmt->fetchAll();
    } else {
        $sql = "SELECT * FROM tls1";
        $stmt = $conn->query($sql);
        return $stmt->fetchAll();
    }
}
