<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Produit
 */
class Produit
{
    /**
     * @var string
     */
    private $nomproduit;

    /**
     * @var integer
     */
    private $idproduit;

    /**
     * @var \AppBundle\Entity\Gamme
     */
    private $gammegamme;

    /**
     * @var \AppBundle\Entity\Projet
     */
    private $projetprojet;


    /**
     * Set nomproduit
     *
     * @param string $nomproduit
     *
     * @return Produit
     */
    public function setNomproduit($nomproduit)
    {
        $this->nomproduit = $nomproduit;

        return $this;
    }

    /**
     * Get nomproduit
     *
     * @return string
     */
    public function getNomproduit()
    {
        return $this->nomproduit;
    }

    /**
     * Set idproduit
     *
     * @param integer $idproduit
     *
     * @return Produit
     */
    public function setIdproduit($idproduit)
    {
        $this->idproduit = $idproduit;

        return $this;
    }

    /**
     * Get idproduit
     *
     * @return integer
     */
    public function getIdproduit()
    {
        return $this->idproduit;
    }

    /**
     * Set gammegamme
     *
     * @param \AppBundle\Entity\Gamme $gammegamme
     *
     * @return Produit
     */
    public function setGammegamme(\AppBundle\Entity\Gamme $gammegamme)
    {
        $this->gammegamme = $gammegamme;

        return $this;
    }

    /**
     * Get gammegamme
     *
     * @return \AppBundle\Entity\Gamme
     */
    public function getGammegamme()
    {
        return $this->gammegamme;
    }

    /**
     * Set projetprojet
     *
     * @param \AppBundle\Entity\Projet $projetprojet
     *
     * @return Produit
     */
    public function setProjetprojet(\AppBundle\Entity\Projet $projetprojet)
    {
        $this->projetprojet = $projetprojet;

        return $this;
    }

    /**
     * Get projetprojet
     *
     * @return \AppBundle\Entity\Projet
     */
    public function getProjetprojet()
    {
        return $this->projetprojet;
    }
}

