<?php
namespace AppBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Module;
use AppBundle\Entity\Devis;
use AppBundle\Entity\Gamme;
use AppBundle\Entity\Commande;
use AppBundle\Entity\Produit;
use AppBundle\Entity\Projet;
use AppBundle\Entity\Composant;
use AppBundle\Entity\Livraison;
class DevisController extends Controller
{
















    public function indexAction()
    {
     /*   return new Response("
  <option>Module 1</option>
  <option>Module 2</option>
  <option>Module 3</option>
</select>
 ");*/

    $repository = $this->getDoctrine()
  ->getManager()
  ->getRepository('AppBundle:Module');

    // On récupère l'entité correspondante à l'id $id
    $listmodule = $repository->findAll();

      // $Module est donc une instance de AppBundle\Entity\Module
    // ou null si l'id $id  n'existe pas, d'où ce if :
    if (null === $listmodule) {
    throw new NotFoundHttpException("L'annonce d'id n'existe pas.");

    }
echo  "Selectionnez votre module<br>";
echo"<select>";
foreach ($listmodule as $module) {
  // $advert est une instance de Advert
  echo "<option>".$module->getNature()."</option>";
}
echo"</select>";
//$nom=$module['idmodule'];
//echo $nom;
 // echo  "Selectionnez votre module<br>";
  //echo "<select><option>".$module->getNature()."</option></select>";
    // Le render ne change pas, on passait avant un tableau, maintenant un objet
    return $this->render('::layout.html.twig', array(
      'Module' => $module
    ));


}
  public function ajouterAction()
    {
    // Création de l'entité

// on donne un id pour test 

$repository = $this->getDoctrine()->getRepository('AppBundle:Livraison');
 $livraison= $repository->find(1);
//$em->persist($commande);
   
    $devis= new Commande();
    $devis->setLivraisonlivraison($livraison);
    $devis->setVendeur('letype');
    $devis->setMontant(10);
     $devis->setDatecommande('1991-07-02');
   echo $devis-> getVendeur();
      echo $devis-> getMontant();
         echo $devis-> getDatecommande();
  $em = $this->getDoctrine()->getManager();
    // On peut ne pas définir ni la date ni la publication,
    // car ces attributs sont définis automatiquement dans le constructeur

    // On récupère l'EntityManager
 //   $em = $this->getDoctrine()->getManager();

    // Étape 1 : On « persiste » l'entité
    $em->persist($devis);
  //  

    // Étape 2 : On « flush » tout ce qui a été persisté avant
    $em->flush();


  return $this->render('::layout.html.twig', array(
      'Devis' => $devis
    ));
    // Reste de la méthode qu'on avait déjà écrit
    //if ($request->isMethod('POST')) {
    //  $request->getSession()->getFlashBag()->add('notice', 'Annonce bien enregistrée.');
    //  return $this->redirect($this->generateUrl('oc_platform_view', array('id' => $devis->getId())));

    

    }












//--------------------------------------------------
//--------------------------------------------------
//--------------------------------------------------
     public function getDevisAction()
    {
		
		
		
$iddevis=1;
    $repository = $this->getDoctrine()
  ->getManager()
  ->getRepository('AppBundle:Devis');

    // On récupère l'entité correspondante à l'id $id
    $devis = $repository->find($iddevis);

      // $Module est donc une instance de AppBundle\Entity\Module
    // ou null si l'id $id  n'existe pas, d'où ce if :
    if (null === $devis) {
    throw new NotFoundHttpException("L'annonce d'id n'existe pas.");

    }
//echo  "devis sélectionné";
echo"<table class='table'>
  <tr>
    <th>Identifiant</th>
    <th>Type</th><th>Etat</th><th>Id de commande</th></tr>";
   

  
 
  echo "<tr><td>".$devis->getIddevis()."</td>";
  echo "<td>".$devis->getType()."</td>";
  echo "<td>".$devis->getEtat()."</td>";
   echo "<td>".$devis->getCommandecommande()->getIdcommande()."</td></tr>";





   //on récupère l'id du devis 
   $devisid= $devis->getIddevis();
   echo $devisid;


$em2 = $this->getDoctrine()->getManager();
$query = $em2->createQuery(
    'SELECT p
    FROM AppBundle:Projet p
    WHERE p.devisdevis= :iddevis'
)->setParameter('iddevis',$devisid);


$projet = $query->getResult();
//verification de la récupération
//echo "projet ".$projet[0]->getidprojet()."";
//echo "description ".$projet[0]->getDescription()."";
//echo $projet->getidprojet;
    /*  $repository2 = $this->getDoctrine()
  ->getManager()
  ->getRepository('AppBundle:Projet');


//On récupère l'ensemble le projet associé
  // $listprojet = $repository2->findOneByDevisdevis($devis);
  // "<td>".$listprojet->getNom()."</td>";
   //   foreach ($listgamme as $gamme) {
// echo "<td>".$gamme->getNom()."</td>";
$projet = $repository2->find($devisid);
//echo $projet;*/

//test de la recupération de la jointure
$projetid=$projet[0]->getidprojet();
$descriptionprojet=$projet[0]->getDescription();

echo"<table class='table'><thead class='thead-default'>
  <tr>
    <th>Projet associé à ce devis</th>
    </tr>";
echo "<td>".$descriptionprojet."</td>";
   echo"</table>";




$em3 = $this->getDoctrine()->getManager();
$query2 = $em3->createQuery(
    'SELECT p
    FROM AppBundle:Produit p
    WHERE p.projetprojet= :idprojet'
)->setParameter('idprojet',$projetid);


$listproduit = $query2->getResult();

//echo "liste des produits : ".$listproduit[0]->getIdproduit()."".$listproduit[1]->getIdproduit()."";
$totaldevisht=0;
echo"<table class='table'><thead class='thead-default'>
  <tr>
    <th>Produits et modules associés à ce projet</th>
    </tr>";
echo"</table>";

foreach ($listproduit as $produit ) {
$prixtotalmodulecumule=0;
//verification de la récupération
//echo "produit ".$produit->getIdproduit()."";


$nomproduit =$produit->getNomproduit();

echo"<table class='table'><thead class='thead-default'>
  <tr>
    <th>Nom du produit</th>
    </tr>";
echo "<td>".$nomproduit."</td>";
   echo"</table>";






/*
    $repository3 = $this->getDoctrine()
  ->getManager()
  ->getRepository('AppBundle:Produit');
$produit = $repository3->find($projetid);
//echo $projet;*/



$produitid=$produit->getIdproduit();
$gamme=$produit->getGammegamme();
$gammeid=$gamme->getIdgamme();
//echo "identifiant produit".$produitid."";
//echo "identifiant de la gamme".$gammeid."";
echo"<table class='table'>
  <tr>
    <th>liste des modules associés à ce produit :</th>
    </tr>";

echo"</table>";

// l'id de la gamme est récupéré

/*
$em4 = $this->getDoctrine()->getManager();
$query2 = $em4->createQuery(
    'SELECT g
    FROM AppBundle:Gamme g
    WHERE p.projetprojet= :idgamme'
)->setParameter('idgamme',$produitid);*/

//Le produit contient le numéro de la gamme qui fait la jointure avec le module, on récupère l'id de la gamme associé




/*

    $repository4 = $this->getDoctrine()
  ->getManager()
  ->getRepository('AppBundle:Gamme');
$gamme= $repository4->find($produitid);
//echo $projet;
$gammeid=$gamme->getIdgamme();

echo "identifiant gamme".$gammeid."";
*/

echo"<table class='table'>
  <tr>
    <th>Identifiant</th>
    <th>Nature</th><th>Unite</th><th>Prix HT</th></tr>";
$em4 = $this->getDoctrine()->getManager();
$query3 = $em4->createQuery(
    'SELECT m
    FROM AppBundle:Module m
    WHERE m.gamme= :idgamme'
)->setParameter('idgamme',$gammeid);


$listmodule = $query3->getResult();
//verification de la récupération
//echo "produit ".$produit[0]->getIdproduit()."";
//echo "nom produit ".$produit[0]->getNomproduit()."";

$prixtotalmodule=0;
/*
    $repository5 = $this->getDoctrine()
  ->getManager()
  ->getRepository('AppBundle:Module');
$module= $repository5->find($gammeid);*/
//echo $projet;
foreach ($listmodule as $module ) {

  # code...

$moduleid=$module->getIdmodule();
$modulenature=$module->getNature();
$moduleunite=$module->getUnite();

//echo "identifiant module".$moduleid."";
//echo "unité du module".$moduleunite."";


   

  
 
  echo "<tr><td>".$moduleid."</td>";
  echo "<td>".$modulenature."</td>";
  echo "<td>".$moduleunite."</td>";


//pour test : 2 modules
//$moduleid=$module[1]->getIdmodule();
//$moduleunite=$module[1]->getUnite();

//echo "identifiant module".$moduleid."";
//echo "unité du module".$moduleunite."";
// createQueryBuilder() automatically selects FROM AppBundle:Projet
// and aliases it to "p"
//$query = $repository2->createQueryBuilder('p')
  //  ->where('p.devisdevis ='.$devisid.'')
  //  ->getQuery();
//$query = $repository2->createQuery('SELECT p FROM MyProject\Model\Projet u WHERE p.devisdevis ='.$devisid.'');
//$users = $query->getResult();


    //  }







//calcul du montant de tous les composants HT 

$em5 = $this->getDoctrine()->getManager();
$query4 = $em5->createQuery(
    'SELECT c
    FROM AppBundle:Composant c
    WHERE c.modulemodule= :idmodule'
)->setParameter('idmodule',$moduleid);
$prixtotalmodule=0;
$listcomposants = $query4->getResult();

//echo "prix total des composants du module".$prixhtcomposants." €";
foreach ($listcomposants as $composant) {

$prixducomposant= $composant->getPrix();
$quantitecomposant= $composant->getQuantite();

//echo "prix du composant :".$prixducomposant."";
//echo "qte du composant :".$quantitecomposant."";
$prixtotalcomposant=$prixducomposant*$quantitecomposant;
$prixtotalmodule=$prixtotalmodule+$prixtotalcomposant;

//echo "Mise à jour du prix avec ce composant :".$prixtotalmodule."";

}
echo "<td>".$prixtotalmodule." €</td></tr>";
$prixtotalmodulecumule=$prixtotalmodule+$prixtotalmodulecumule;
$totaldevisht=$prixtotalmodulecumule+$totaldevisht;
//echo "prix cumulé module".$prixtotalmodulecumule."";
/*
if ($prixtotalcomposant>0){

}
else{
echo "<td>pas de composants</td></tr>" ; 
}*/
}
  echo "<tr><td>Total HT pour ce produit :</td>";
  echo "<td></td>";
    echo "<td></td>";
  echo "<td>".$prixtotalmodulecumule." €</td></tr>";


}
echo "<tr><td>Total HT du devis:</td>";
  echo "<td></td>";
    echo "<td></td>";
  echo "<td>".$totaldevisht." €</td></tr>";


$tva='19,6';
echo "<tr><td>TVA appliquée:</td>";
  echo "<td></td>";
    echo "<td></td>";
  echo "<td>".$tva." %</td></tr>";
$totalttc=($tva*$totaldevisht)/100;
  echo "<tr><td>Total TTC pour ce devis :</td>";
  echo "<td></td>";
    echo "<td></td>";
  echo "<td>".$totalttc." €</td></tr>";
echo"</table>";



//$nom=$module['idmodule'];
//echo $nom;
 // echo  "Selectionnez votre module<br>";
  //echo "<select><option>".$module->getNature()."</option></select>";
    // Le render ne change pas, on passait avant un tableau, maintenant un objet
    return $this->render('::layout.html.twig', array(
      'Devis' => $devis
    ));


}
}