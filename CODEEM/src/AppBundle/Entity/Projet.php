<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Projet
 */
class Projet
{
    /**
     * @var string
     */
    private $description;

    /**
     * @var \DateTime
     */
    private $datecreationprojet;

    /**
     * @var integer
     */
    private $idprojet;

    /**
     * @var \AppBundle\Entity\Client
     */
    private $idclient;

    /**
     * @var \AppBundle\Entity\Devis
     */
    private $devisdevis;


    /**
     * Set description
     *
     * @param string $description
     *
     * @return Projet
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set datecreationprojet
     *
     * @param \DateTime $datecreationprojet
     *
     * @return Projet
     */
    public function setDatecreationprojet($datecreationprojet)
    {
        $this->datecreationprojet = $datecreationprojet;

        return $this;
    }

    /**
     * Get datecreationprojet
     *
     * @return \DateTime
     */
    public function getDatecreationprojet()
    {
        return $this->datecreationprojet;
    }

    /**
     * Set idprojet
     *
     * @param integer $idprojet
     *
     * @return Projet
     */
    public function setIdprojet($idprojet)
    {
        $this->idprojet = $idprojet;

        return $this;
    }

    /**
     * Get idprojet
     *
     * @return integer
     */
    public function getIdprojet()
    {
        return $this->idprojet;
    }

    /**
     * Set idclient
     *
     * @param \AppBundle\Entity\Client $idclient
     *
     * @return Projet
     */
    public function setIdclient(\AppBundle\Entity\Client $idclient)
    {
        $this->idclient = $idclient;

        return $this;
    }

    /**
     * Get idclient
     *
     * @return \AppBundle\Entity\Client
     */
    public function getIdclient()
    {
        return $this->idclient;
    }

    /**
     * Set devisdevis
     *
     * @param \AppBundle\Entity\Devis $devisdevis
     *
     * @return Projet
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
}

