<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Commande
* @ORM\Table(name="Commande")
* @ORM\Entity(repositoryClass="AppBundle\Repository\CommandeRepository")
*/
class Commande
{
    /**
     * @var \DateTime
     */
    private $datecommande;

    /**
     * @var string
     */
    private $vendeur;

    /**
     * @var float
     */
    private $montant;

    /**
     * @var integer
     /**
  /**
 * @ORM\Id
 * @ORM\Column(type="integer")
 * @ORM\GeneratedValue(strategy="AUTO")
 */
     
    private $idcommande;

    /**
     * @var \AppBundle\Entity\Livraison

    * @ORM\ManyToOne(targetEntity="Livraison")
     * @ORM\JoinColumn(name="livraison_idlivraison", referencedColumnName="idlivraison")
     */
     
    private $livraisonlivraison;


    /**
     * Set datecommande
     *
     * @param \DateTime $datecommande
     *
     * @return Commande
     */
    public function setDatecommande($datecommande)
    {
        $this->datecommande = $datecommande;
 

        return $this;
    }

    /**
     * Get datecommande
     *
     * @return \DateTime
     */
    public function getDatecommande()
    {
        return $this->datecommande;
    }

    /**
     * Set vendeur
     *
     * @param string $vendeur
     *
     * @return Commande
     */
    public function setVendeur($vendeur)
    {
        $this->vendeur = $vendeur;

        return $this;
    }

    /**
     * Get vendeur
     *
     * @return string
     */
    public function getVendeur()
    {
        return $this->vendeur;
    }

    /**
     * Set montant
     *
     * @param float $montant
     *
     * @return Commande
     */
    public function setMontant($montant)
    {
        $this->montant = $montant;

        return $this;
    }

    /**
     * Get montant
     *
     * @return float
     */
    public function getMontant()
    {
        return $this->montant;
    }

    /**
     * Set idcommande
     *
     * @param integer $idcommande
     *
     * @return Commande
     */
    public function setIdcommande($idcommande)
    {
        $this->idcommande = $idcommande;


        return $this;
    }

    /**
     * Get idcommande
     *
     * @return integer
     */
    public function getIdcommande()
    {
        return $this->idcommande;
    }

    /**
     * Set livraisonlivraison
     *
     * @param \AppBundle\Entity\Livraison $livraisonlivraison
     *
     * @return Commande
     */
    public function setLivraisonlivraison(\AppBundle\Entity\Livraison $livraisonlivraison)
    {
        $this->livraisonlivraison = $livraisonlivraison;

        return $this;
    }

    /**
     * Get livraisonlivraison
     *
     * @return \AppBundle\Entity\Livraison
     */
    public function getLivraisonlivraison()
    {
        return $this->livraisonlivraison;
    }
}

