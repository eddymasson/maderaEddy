<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Etapepaiement
 */
class Etapepaiement
{
    /**
     * @var string
     */
    private $nometapepaiement;

    /**
     * @var \DateTime
     */
    private $datepaiement;

    /**
     * @var integer
     */
    private $idetapepaiement;

    /**
     * @var \AppBundle\Entity\Devis
     */
    private $devisdevis;

    /**
     * @var \AppBundle\Entity\Modalitepaiement
     */
    private $modalitepaiementtypeutilisateur;


    /**
     * Set nometapepaiement
     *
     * @param string $nometapepaiement
     *
     * @return Etapepaiement
     */
    public function setNometapepaiement($nometapepaiement)
    {
        $this->nometapepaiement = $nometapepaiement;

        return $this;
    }

    /**
     * Get nometapepaiement
     *
     * @return string
     */
    public function getNometapepaiement()
    {
        return $this->nometapepaiement;
    }

    /**
     * Set datepaiement
     *
     * @param \DateTime $datepaiement
     *
     * @return Etapepaiement
     */
    public function setDatepaiement($datepaiement)
    {
        $this->datepaiement = $datepaiement;

        return $this;
    }

    /**
     * Get datepaiement
     *
     * @return \DateTime
     */
    public function getDatepaiement()
    {
        return $this->datepaiement;
    }

    /**
     * Set idetapepaiement
     *
     * @param integer $idetapepaiement
     *
     * @return Etapepaiement
     */
    public function setIdetapepaiement($idetapepaiement)
    {
        $this->idetapepaiement = $idetapepaiement;

        return $this;
    }

    /**
     * Get idetapepaiement
     *
     * @return integer
     */
    public function getIdetapepaiement()
    {
        return $this->idetapepaiement;
    }

    /**
     * Set devisdevis
     *
     * @param \AppBundle\Entity\Devis $devisdevis
     *
     * @return Etapepaiement
     */
    public function setDevisdevis(\AppBundle\Entity\Devis $devisdevis)
    {
        $this->devisdevis = $devisdevis;

        return $this;
    }

    /**
     * Get devisdevis
     *
     * @return \AppBundle\Entity\Devis
     */
    public function getDevisdevis()
    {
        return $this->devisdevis;
    }

    /**
     * Set modalitepaiementtypeutilisateur
     *
     * @param \AppBundle\Entity\Modalitepaiement $modalitepaiementtypeutilisateur
     *
     * @return Etapepaiement
     */
    public function setModalitepaiementtypeutilisateur(\AppBundle\Entity\Modalitepaiement $modalitepaiementtypeutilisateur)
    {
        $this->modalitepaiementtypeutilisateur = $modalitepaiementtypeutilisateur;

        return $this;
    }

    /**
     * Get modalitepaiementtypeutilisateur
     *
     * @return \AppBundle\Entity\Modalitepaiement
     */
    public function getModalitepaiementtypeutilisateur()
    {
        return $this->modalitepaiementtypeutilisateur;
    }
}

