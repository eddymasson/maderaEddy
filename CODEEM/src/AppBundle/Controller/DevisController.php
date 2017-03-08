<?php
namespace AppBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Module;
use AppBundle\Entity\Devis;
use AppBundle\Entity\Commande;
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
    return $this->render('::view.html.twig', array(
      'Module' => $module
    ));


}
  public function ajouterAction()
    {
    // Création de l'entité
 

 $commande = $this->getDoctrine()
        ->getRepository('AppBundle:Commande')
        ->find(1);



    $devis= new Devis();

    $devis->setType('letype');
    $devis->setEtat('letat');
    $devis->setidDevis("1");
    $devis->setCommandecommande($commande);
  
    $em = $this->getDoctrine()->getManager();
    // On peut ne pas définir ni la date ni la publication,
    // car ces attributs sont définis automatiquement dans le constructeur

    // On récupère l'EntityManager
 //   $em = $this->getDoctrine()->getManager();

    // Étape 1 : On « persiste » l'entité
    $em->persist($devis);
    $em->persist($commande);

    // Étape 2 : On « flush » tout ce qui a été persisté avant
    $em->flush();



    // Reste de la méthode qu'on avait déjà écrit
    if ($request->isMethod('POST')) {
      $request->getSession()->getFlashBag()->add('notice', 'Annonce bien enregistrée.');
      return $this->redirect($this->generateUrl('oc_platform_view', array('id' => $devis->getId())));

    }

    }
}