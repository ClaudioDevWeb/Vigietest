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
        }elseif (!empty($searchDATA)) { 
        $search = " WHERE 1=1";
        extract($searchDATA);
        if(!empty($matricule)) $search.=" AND matricule=$matricule";
        if(!empty($nom)) $search.=" AND nom LIKE '%$nom%'";
        if(!empty($prenom)) $search.=" AND prenom LIKE '%$prenom%'";
        if(!empty($pseudo)) $search.=" AND pseudo LIKE '%$pseudo%'";
        if(!empty($numero_tel)) $search.=" AND numero_tel LIKE '%$numero_tel%'";
        if(!empty($numero_cin)) $search.=" AND numero_cin LIKE '%$numero_cin%'";
        if(!empty($date_embauche)) $search.=" AND DATE (date_embauche)='$date_embauche'";
        if(!empty($adresse)) $search.=" AND adresse LIKE '%$adresse%'";
        if(!empty($situation_familial)) $search.=" AND situation_familial LIKE '%$situation_familial%'";
        if(!empty($nbr_enfant)) $search.=" AND nbr_enfant=$nbr_enfantet";
        $sql="SELECT * FROM tech_video $search";
        $req = $GLOBALS['connexion']->prepare($sql);
        $req->execute();
        return $req->fetchAll();
} else{
        
$sql="SELECT * FROM tech_video";

$req=$GLOBALS['connexion']->prepare($sql);

$req->execute();

return $req->fetchAll();
        }

}

function getTechAlarme($id=null)
{
    if(!empty($id))
        {
$sql="SELECT * FROM tech_alarme WHERE id=?";
$req=$GLOBALS['connexion']->prepare($sql);
$req->execute(array($id));

return $req->fetch();
        }

    else
        {
$sql="SELECT * FROM tech_alarme";
$req=$GLOBALS['connexion']->prepare($sql);
$req->execute();

return $req->fetchAll();
        }
}

function getTls1($id=null)
{
    if(!empty($id))
        {
$sql="SELECT * FROM tls1 WHERE id=?";
$req=$GLOBALS['connexion']->prepare($sql);
$req->execute(array($id));

return $req->fetch();
        }

    else
        {
$sql="SELECT * FROM tls1";
$req=$GLOBALS['connexion']->prepare($sql);
$req->execute();

return $req->fetchAll();
        }

}

function getTls2($id=null)
{
    if(!empty($id))
        {
$sql="SELECT * FROM tls2 WHERE id=?";
$req=$GLOBALS['connexion']->prepare($sql);
$req->execute(array($id));

return $req->fetch();
        }

    else
        {
$sql="SELECT * FROM tls2";
$req=$GLOBALS['connexion']->prepare($sql);
$req->execute();

return $req->fetchAll();
        }

}

function getTls3($id=null)
{
    if(!empty($id))
        {
$sql="SELECT * FROM tls3 WHERE id=?";
$req=$GLOBALS['connexion']->prepare($sql);
$req->execute(array($id));

return $req->fetch();
        }

    else
        {
$sql="SELECT * FROM tls3";
$req=$GLOBALS['connexion']->prepare($sql);
$req->execute();

return $req->fetchAll();
        }

}


function getInc1($id=null)
{
    if(!empty($id))
        {
$sql="SELECT * FROM incendie1 WHERE id=?";
$req=$GLOBALS['connexion']->prepare($sql);
$req->execute(array($id));

return $req->fetch();
        }

    else
        {
$sql="SELECT * FROM incendie1";
$req=$GLOBALS['connexion']->prepare($sql);
$req->execute();

return $req->fetchAll();
        }

}

function getInc2($id=null)
{
    if(!empty($id))
        {
$sql="SELECT * FROM incendie2 WHERE id=?";
$req=$GLOBALS['connexion']->prepare($sql);
$req->execute(array($id));

return $req->fetch();
        }

    else
        {
$sql="SELECT * FROM incendie2";
$req=$GLOBALS['connexion']->prepare($sql);
$req->execute();

return $req->fetchAll();
        }
}

function getInt1($id=null)
{
    if(!empty($id))
        {
$sql="SELECT * FROM intervention1 WHERE id=?";
$req=$GLOBALS['connexion']->prepare($sql);
$req->execute(array($id));

return $req->fetch();
        }

    else
        {
$sql="SELECT * FROM intervention1";
$req=$GLOBALS['connexion']->prepare($sql);
$req->execute();

return $req->fetchAll();
        }

}

function getInt2($id=null)
{
    if(!empty($id))
        {
$sql="SELECT * FROM intervention2 WHERE id=?";
$req=$GLOBALS['connexion']->prepare($sql);
$req->execute(array($id));

return $req->fetch();
        }

    else
        {
$sql="SELECT * FROM intervention2";
$req=$GLOBALS['connexion']->prepare($sql);
$req->execute();

return $req->fetchAll();
        }

}

function getVente($id=null)
{
    if(!empty($id))
        {
$sql="SELECT  nom_article,nom,prenom,v.quantite,date_vente FROM 
client as c,vente as v,article as a  WHERE v.id_article=a.id AND v.id_client=c.id AND v.id=?";
$req=$GLOBALS['connexion']->prepare($sql);

$req->execute(array($id));

return $req->fetch();
        }

    else
        {
$sql="SELECT  nom_article,nom,prenom,v.quantite,date_vente FROM 
client as c,vente as v,article as a  WHERE v.id_client=c.id AND v.id_article=c.id";
$req=$GLOBALS['connexion']->prepare($sql);
$req->execute();

return $req->fetchAll();
        }
}



?>