<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Composant
 */
class Composant
{
    /**
     * @var string
     */
    private $unite;

    /**
     * @var string
     */
    private $nature;

    /**
     * @var float
     */
    private $section;

    /**
     * @var float
     */
    private $longueur;

    /**
     * @var float
     */
    private $largeur;

    /**
     * @var float
     */
    private $epaisseur;

    /**
     * @var float
     */
    private $prix;

    /**
     * @var float
     */
    private $pourcentagecommerciaux;

    /**
     * @var float
     */
    private $pourcentageentreprise;

    /**
     * @var integer
     */
    private $quantite;

    /**
     * @var integer
     */
    private $idcomposant;

    /**
     * @var \AppBundle\Entity\Famillecomposant
     */
    private $famillecomposantfamillecomposant;

    /**
     * @var \AppBundle\Entity\Fournisseur
     */
    private $fournisseurfournisseur;

    /**
     * @var \AppBundle\Entity\Module
     */
    private $modulemodule;


    /**
     * Set unite
     *
     * @param string $unite
     *
     * @return Composant
     */
    public function setUnite($unite)
    {
        $this->unite = $unite;

        return $this;
    }

    /**
     * Get unite
     *
     * @return string
     */
    public function getUnite()
    {
        return $this->unite;
    }

    /**
     * Set nature
     *
     * @param string $nature
     *
     * @return Composant
     */
    public function setNature($nature)
    {
        $this->nature = $nature;

        return $this;
    }

    /**
     * Get nature
     *
     * @return string
     */
    public function getNature()
    {
        return $this->nature;
    }

    /**
     * Set section
     *
     * @param string $section
     *
     * @return Composant
     */
    public function setSection($section)
    {
        $this->section = $section;

        return $this;
    }

    /**
     * Get section
     *
     * @return string
     */
    public function getSection()
    {
        return $this->section;
    }

    /**
     * Set longueur
     *
     * @param string $longueur
     *
     * @return Composant
     */
    public function setLongueur($longueur)
    {
        $this->longueur = $longueur;

        return $this;
    }

    /**
     * Get longueur
     *
     * @return string
     */
    public function getLongueur()
    {
        return $this->longueur;
    }

    /**
     * Set largeur
     *
     * @param string $largeur
     *
     * @return Composant
     */
    public function setLargeur($largeur)
    {
        $this->largeur = $largeur;

        return $this;
    }

    /**
     * Get largeur
     *
     * @return string
     */
    public function getLargeur()
    {
        return $this->largeur;
    }

    /**
     * Set epaisseur
     *
     * @param string $epaisseur
     *
     * @return Composant
     */
    public function setEpaisseur($epaisseur)
    {
        $this->epaisseur = $epaisseur;

        return $this;
    }

    /**
     * Get epaisseur
     *
     * @return string
     */
    public function getEpaisseur()
    {
        return $this->epaisseur;
    }

    /**
     * Set Guantite
     *
     * @param integer $quantite
     *
     * @return Composant
     */
    public function setQuantite($quantite)
    {
        $this->quantite = $quantite;

        return $this;
    }

    /**
     * Get Quantite
     *
     * @return integer
     */
    public function getQuantite()
    {
        return $this->quantite;
    }

    /**
     * Set prix
     *
     * @param string $quantite
     *
     * @return Composant
     */
    public function setPrix($prix)
    {
        $this->prix = $prix;

        return $this;
    }

    /**
     * Get prix
     *
     * @return string
     */
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * Set pourcentagecommerciaux
     *
     * @param string $pourcentagecommerciaux
     *
     * @return Composant
     */
    public function setPourcentagecommerciaux($pourcentagecommerciaux)
    {
        $this->pourcentagecommerciaux = $pourcentagecommerciaux;

        return $this;
    }

    /**
     * Get pourcentagecommerciaux
     *
     * @return string
     */
    public function getPourcentagecommerciaux()
    {
        return $this->pourcentagecommerciaux;
    }

    /**
     * Set pourcentageentreprise
     *
     * @param string $pourcentageentreprise
     *
     * @return Composant
     */
    public function setPourcentageentreprise($pourcentageentreprise)
    {
        $this->pourcentageentreprise = $pourcentageentreprise;

        return $this;
    }

    /**
     * Get pourcentageentreprise
     *
     * @return string
     */
    public function getPourcentageentreprise()
    {
        return $this->pourcentageentreprise;
    }

    /**
     * Set idcomposant
     *
     * @param integer $idcomposant
     *
     * @return Composant
     */
    public function setIdcomposant($idcomposant)
    {
        $this->idcomposant = $idcomposant;

        return $this;
    }

    /**
     * Get idcomposant
     *
     * @return integer
     */
    public function getIdcomposant()
    {
        return $this->idcomposant;
    }

    /**
     * Set famillecomposantfamillecomposant
     *
     * @param \AppBundle\Entity\Famillecomposant $famillecomposantfamillecomposant
     *
     * @return Composant
     */
    public function setFamillecomposantfamillecomposant(\AppBundle\Entity\Famillecomposant $famillecomposantfamillecomposant)
    {
        $this->famillecomposantfamillecomposant = $famillecomposantfamillecomposant;

        return $this;
    }

    /**
     * Get famillecomposantfamillecomposant
     *
     * @return \AppBundle\Entity\Famillecomposant
     */
    public function getFamillecomposantfamillecomposant()
    {
        return $this->famillecomposantfamillecomposant;
    }

    /**
     * Set fournisseurfournisseur
     *
     * @param \AppBundle\Entity\Fournisseur $fournisseurfournisseur
     *
     * @return Composant
     */
    public function setFournisseurfournisseur(\AppBundle\Entity\Fournisseur $fournisseurfournisseur)
    {
        $this->fournisseurfournisseur = $fournisseurfournisseur;

        return $this;
    }

    /**
     * Get fournisseurfournisseur
     *
     * @return \AppBundle\Entity\Fournisseur
     */
    public function getFournisseurfournisseur()
    {
        return $this->fournisseurfournisseur;
    }

    /**
     * Set modulemodule
     *
     * @param \AppBundle\Entity\Module $modulemodule
     *
     * @return Composant
     */
    public function setModulemodule(\AppBundle\Entity\Module $modulemodule)
    {
        $this->modulemodule = $modulemodule;

        return $this;
    }

    /**
     * Get modulemodule
     *
     * @return \AppBundle\Entity\Module
     */
    public function getModulemodule()
    {
        return $this->modulemodule;
    }
}

