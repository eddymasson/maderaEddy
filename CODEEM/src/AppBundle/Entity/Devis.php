<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Devis
 */
class Devis
{
     /**
     *@AppBundle\ManyToOne(targetEntity="Commande",inversedBy="Devis")
     *@AppBundle\JoinColumn(name="Commande_idCommande", referencedColumnName="idCommande")
     */
    /**
     * @var string
     */
    private $type;

    /**
     * @var string
     */
    private $etat;

    /**
     * @var integer
     */
    private $iddevis;

    /**
     * @var \AppBundle\Entity\Commande
     */


    private $commandecommande;
 //   private $commandecommande;


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

