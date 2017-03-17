<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Devis
* @ORM\Table(name="Devis")
* @ORM\Entity(repositoryClass="AppBundle\Repository\DevisRepository")
 */
class Devis
{
    /**
     * @var string
        * @ORM\Column(name="type", type="string")
     */
    private $type;

    /**
     * @var string
        * @ORM\Column(name="etat", type="string")
     */
    private $etat;

    /**
     * @var integer
  /**
 * @ORM\Id
 * @ORM\Column(type="integer")
 * @ORM\GeneratedValue(strategy="AUTO")
 */
     
    private $iddevis;

    /**
     * @var \AppBundle\Entity\Commande
     
    * @ORM\OneToOne(targetEntity="Commande")
    * @ORM\JoinColumn(name="commande_idcommande", referencedColumnName="idcommande")
     */
    private $commandecommande;


    /**
     * Set type
     *
     * @param string $type
     *
     * @return Devis
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string
     */
    public function getType()
    {

        return $this->type;

    }

    /**
     * Set etat
     *
     * @param string $etat
     *
     * @return Devis
     */
    public function setEtat($etat)
    {
        $this->etat = $etat;

        return $this;
    }

    /**
     * Get etat
     *
     * @return string
     */
    public function getEtat()
    {
        return $this->etat;
    }

    /**
     * Set iddevis
     *
     * @param integer $iddevis
     *
     * @return Devis
     */
    public function setIddevis($iddevis)
    {
        $this->iddevis = $iddevis;

        return $this;
    }

    /**
     * Get iddevis
     *
     * @return integer
     */
    public function getIddevis()
    {
        return $this->iddevis;
    }

    /**
     * Set commandecommande
     *
     * @param \AppBundle\Entity\Commande $commandecommande
     *
     * @return Devis
     */
    public function setCommandecommande(\AppBundle\Entity\Commande $commandecommande)
    {
        $this->commandecommande = $commandecommande;

        return $this;
    }

    /**
     * Get commandecommande
     *
     * @return \AppBundle\Entity\Commande
     */
    public function getCommandecommande()
    {
        return $this->commandecommande;
    }
}

