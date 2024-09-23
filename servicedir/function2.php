<?php
include 'connexion.php';

function getTechVideo($id=null,$searchDATA = array())
{
    if(!empty($id))
    {
        $sql="SELECT * FROM tech_video WHERE id=?";
        $req=$GLOBALS['connexion']->prepare($sql);
        $req->execute(array($id));
        return $req->fetch();
    }
    elseif (!empty($searchDATA)) {
        $search = " WHERE 1=1";
        extract($searchDATA);
        if(!empty($matricule)) $search.=" AND matricule=$matricule";
        if(!empty($nom)) $search.=" AND nom LIKE '%$nom%'";
        if(!empty($prenom)) $search.=" AND prenom LIKE '%$prenom%'";
        if(!empty($pseudo)) $search.=" AND pseudo LIKE '%$pseudo%'";
        if(!empty($numero_tel)) $search.=" AND numero_tel LIKE '%$numero_tel%'";
        if(!empty($numero_cin)) $search.=" AND numero_cin LIKE '%$numero_cin%'";
        if(!empty($date_embauche)) $search.=" AND DATE(date_embauche)='$date_embauche'";
        if(!empty($adresse)) $search.=" AND adresse LIKE '%$adresse%'";
        if(!empty($situation_familial)) $search.=" AND situation_familial LIKE '%$situation_familial%'";
        if(!empty($nbr_enfant)) $search.=" AND nbr_enfant=$nbr_enfant";
        $sql="SELECT * FROM tech_video $search";
        $req = $GLOBALS['connexion']->prepare($sql);
        $req->execute();
        return $req->fetchAll();
    }
    else {
        $sql="SELECT * FROM tech_video";
        $req=$GLOBALS['connexion']->prepare($sql);
        $req->execute();
        return $req->fetchAll();
    }
}

function getTechAlarme($id=null,$searchDATA = array())
{
    if(!empty($id))
    {
        $sql="SELECT * FROM tech_alarme WHERE id=?";
        $req=$GLOBALS['connexion']->prepare($sql);
        $req->execute(array($id));
        return $req->fetch();
    }
    elseif (!empty($searchDATA)) {
        $search = " WHERE 1=1";
        extract($searchDATA);
        if(!empty($matricule)) $search.=" AND matricule=$matricule";
        if(!empty($nom)) $search.=" AND nom LIKE '%$nom%'";
        if(!empty($prenom)) $search.=" AND prenom LIKE '%$prenom%'";
        if(!empty($pseudo)) $search.=" AND pseudo LIKE '%$pseudo%'";
        if(!empty($numero_tel)) $search.=" AND numero_tel LIKE '%$numero_tel%'";
        if(!empty($numero_cin)) $search.=" AND numero_cin LIKE '%$numero_cin%'";
        if(!empty($date_embauche)) $search.=" AND DATE(date_embauche)='$date_embauche'";
        if(!empty($adresse)) $search.=" AND adresse LIKE '%$adresse%'";
        if(!empty($situation_familial)) $search.=" AND situation_familial LIKE '%$situation_familial%'";
        if(!empty($nbr_enfant)) $search.=" AND nbr_enfant=$nbr_enfant";
        $sql="SELECT * FROM tech_alarme $search";
        $req = $GLOBALS['connexion']->prepare($sql);
        $req->execute();
        return $req->fetchAll();
    }
    else {
        $sql="SELECT * FROM tech_alarme";
        $req=$GLOBALS['connexion']->prepare($sql);
        $req->execute();
        return $req->fetchAll();
    }
}

function getTls1($id=null,$searchDATA = array())
{
    if(!empty($id))
    {
        $sql="SELECT * FROM tls1 WHERE id=?";
        $req=$GLOBALS['connexion']->prepare($sql);
        $req->execute(array($id));
        return $req->fetch();
    }
    elseif (!empty($searchDATA)) {
        $search = " WHERE 1=1";
        extract($searchDATA);
        if(!empty($matricule)) $search.=" AND matricule=$matricule";
        if(!empty($nom)) $search.=" AND nom LIKE '%$nom%'";
        if(!empty($prenom)) $search.=" AND prenom LIKE '%$prenom%'";
        if(!empty($pseudo)) $search.=" AND pseudo LIKE '%$pseudo%'";
        if(!empty($numero_tel)) $search.=" AND numero_tel LIKE '%$numero_tel%'";
        if(!empty($numero_cin)) $search.=" AND numero_cin LIKE '%$numero_cin%'";
        if(!empty($date_embauche)) $search.=" AND DATE(date_embauche)='$date_embauche'";
        if(!empty($adresse)) $search.=" AND adresse LIKE '%$adresse%'";
        if(!empty($situation_familial)) $search.=" AND situation_familial LIKE '%$situation_familial%'";
        if(!empty($nbr_enfant)) $search.=" AND nbr_enfant=$nbr_enfant";
        $sql="SELECT * FROM tls1 $search";
        $req = $GLOBALS['connexion']->prepare($sql);
        $req->execute();
        return $req->fetchAll();
    }
    else {
        $sql="SELECT * FROM tls1";
        $req=$GLOBALS['connexion']->prepare($sql);
        $req->execute();
        return $req->fetchAll();
    }
}

function getTls2($id=null,$searchDATA = array())
{
    if(!empty($id))
    {
        $sql="SELECT * FROM tls2 WHERE id=?";
        $req=$GLOBALS['connexion']->prepare($sql);
        $req->execute(array($id));
        return $req->fetch();
    }
    elseif (!empty($searchDATA)) {
        $search = " WHERE 1=1";
        extract($searchDATA);
        if(!empty($matricule)) $search.=" AND matricule=$matricule";
        if(!empty($nom)) $search.=" AND nom LIKE '%$nom%'";
        if(!empty($prenom)) $search.=" AND prenom LIKE '%$prenom%'";
        if(!empty($pseudo)) $search.=" AND pseudo LIKE '%$pseudo%'";
        if(!empty($numero_tel)) $search.=" AND numero_tel LIKE '%$numero_tel%'";
        if(!empty($numero_cin)) $search.=" AND numero_cin LIKE '%$numero_cin%'";
        if(!empty($date_embauche)) $search.=" AND DATE(date_embauche)='$date_embauche'";
        if(!empty($adresse)) $search.=" AND adresse LIKE '%$adresse%'";
        if(!empty($situation_familial)) $search.=" AND situation_familial LIKE '%$situation_familial%'";
        if(!empty($nbr_enfant)) $search.=" AND nbr_enfant=$nbr_enfant";
        $sql="SELECT * FROM tls2 $search";
        $req = $GLOBALS['connexion']->prepare($sql);
        $req->execute();
        return $req->fetchAll();
    }
    else {
        $sql="SELECT * FROM tls2";
        $req=$GLOBALS['connexion']->prepare($sql);
        $req->execute();
        return $req->fetchAll();
    }
}

function getTls3($id=null,$searchDATA = array())
{
    if(!empty($id))
    {
        $sql="SELECT * FROM tls3 WHERE id=?";
        $req=$GLOBALS['connexion']->prepare($sql);
        $req->execute(array($id));
        return $req->fetch();
    }
    elseif (!empty($searchDATA)) {
        $search = " WHERE 1=1";
        extract($searchDATA);
        if(!empty($matricule)) $search.=" AND matricule=$matricule";
        if(!empty($nom)) $search.=" AND nom LIKE '%$nom%'";
        if(!empty($prenom)) $search.=" AND prenom LIKE '%$prenom%'";
        if(!empty($pseudo)) $search.=" AND pseudo LIKE '%$pseudo%'";
        if(!empty($numero_tel)) $search.=" AND numero_tel LIKE '%$numero_tel%'";
        if(!empty($numero_cin)) $search.=" AND numero_cin LIKE '%$numero_cin%'";
        if(!empty($date_embauche)) $search.=" AND DATE(date_embauche)='$date_embauche'";
        if(!empty($adresse)) $search.=" AND adresse LIKE '%$adresse%'";
        if(!empty($situation_familial)) $search.=" AND situation_familial LIKE '%$situation_familial%'";
        if(!empty($nbr_enfant)) $search.=" AND nbr_enfant=$nbr_enfant";
        $sql="SELECT * FROM tls3 $search";
        $req = $GLOBALS['connexion']->prepare($sql);
        $req->execute();
        return $req->fetchAll();
    }
    else {
        $sql="SELECT * FROM tls3";
        $req=$GLOBALS['connexion']->prepare($sql);
        $req->execute();
        return $req->fetchAll();
    }
}

// Même principe pour les autres fonctions (getInc1, getInc2, getInt1, getInt2, etc.)
// Tu n'as qu'à appliquer la même logique de recherche pour chaque fonction
?>
