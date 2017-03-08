<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Stock
 */
class Stock
{
    /**
     * @var float
     */
    private $quantite;

    /**
     * @var integer
     */
    private $idstock;

    /**
     * @var \AppBundle\Entity\Composant
     */
    private $composantcomposant;


    /**
     * Set quantite
     *
     * @param float $quantite
     *
     * @return Stock
     */
    public function setQuantite($quantite)
    {
        $this->quantite = $quantite;

        return $this;
    }

    /**
     * Get quantite
     *
     * @return float
     */
    public function getQuantite()
    {
        return $this->quantite;
    }

    /**
     * Set idstock
     *
     * @param integer $idstock
     *
     * @return Stock
     */
    public function setIdstock($idstock)
    {
        $this->idstock = $idstock;

        return $this;
    }

    /**
     * Get idstock
     *
     * @return integer
     */
    public function getIdstock()
    {
        return $this->idstock;
    }

    /**
     * Set composantcomposant
     *
     * @param \AppBundle\Entity\Composant $composantcomposant
     *
     * @return Stock
     */
    public function setComposantcomposant(\AppBundle\Entity\Composant $composantcomposant)
    {
        $this->composantcomposant = $composantcomposant;

        return $this;
    }

    /**
     * Get composantcomposant
     *
     * @return \AppBundle\Entity\Composant
     */
    public function getComposantcomposant()
    {
        return $this->composantcomposant;
    }
}

