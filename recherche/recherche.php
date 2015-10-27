<?php 
$titre = "Resultat GoogleForce3";
include "header.php";

if(isset($_GET['page']))
{
	$page = htmlentities(strip_tags($_GET['page']));
}
else $page =1;
$fin=10;
$debut = $fin*($page -1);



//récupération de l'info à chercher
$motCle = htmlentities(strip_tags($_GET['search']));
$requete = "SELECT * 
			FROM webforce3.insee 
			WHERE nomCommune LIKE ?
			LIMIT ".$debut. ", ".$fin;
// connexion BDD
require_once "connexion.php";
//exécution de la requête
$curseur = $dbh->prepare($requete);
$curseur->execute(array('%'.$motCle.'%'));
$resultatRecherche = $curseur->fetchALL(PDO::FETCH_ASSOC);

if($page>1) 
{
	echo '<button onclick="document.location.href=\'recherche.php?page='.
					($page-1).'&search='.$_GET['search'].'\';">&lt;&lt;</button>';
}
if (count($resultatRecherche)==$fin)
	echo '<button onclick="document.location.href=\'recherche.php?page='.
					($page+1).'&search='.$_GET['search'].'\';">&gt;&gt;</button>';
// pour l'affichage du tableau
include "fonctions.php";

echo afficheTableau2D($resultatRecherche);
echo '<a href="GoogleForce3.php">Autre recherche</a>';



/*ksdlkzdinoldnizd*/

include "footer.php";

 ?>