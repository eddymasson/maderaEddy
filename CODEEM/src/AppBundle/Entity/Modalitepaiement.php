<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Modalitepaiement
 */
class Modalitepaiement
{
    /**
     * @var float
     */
    private $pourcentage;

    /**
     * @var integer
     */
    private $idmodalitepaiement;


    /**
     * Set pourcentage
     *
     * @param float $pourcentage
     *
     * @return Modalitepaiement
     */
    public function setPourcentage($pourcentage)
    {
        $this->pourcentage = $pourcentage;

        return $this;
    }

    /**
     * Get pourcentage
     *
     * @return float
     */
    public function getPourcentage()
    {
        return $this->pourcentage;
    }

    /**
     * Get idmodalitepaiement
     *
     * @return integer
     */
    public function getIdmodalitepaiement()
    {
        return $this->idmodalitepaiement;
    }
}

