<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
/**
 * Module
 * @ORM\Table(name="Produit")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ProduitRepository")
 */
class Produit
{
    /**
* @ORM\Column(name="nomproduit", type="string", length=45)
     */
    private $nomproduit;

    /**
    * @ORM\Column(name="idproduit", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $idproduit;

    /**
     * @var \AppBundle\Entity\Gamme
      @ORM\ManyToOne(targetEntity="Gamme")
     * @ORM\JoinColumn(name="gamme_idgamme", referencedColumnName="idGamme")
     */
    private $gammegamme;

    /**
     * @var \AppBundle\Entity\Projet
     @ORM\ManyToOne(targetEntity="Projet")
     * @ORM\JoinColumn(name="projet_idprojet", referencedColumnName="idprojet")
     */    private $projetprojet;


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

