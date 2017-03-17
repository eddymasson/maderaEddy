<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Gamme
 * @ORM\Table(name="Gamme")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\GammeRepository")
 */
class Gamme
{
    /**
     * @var string
     *
     * @ORM\Column(name="regleCalcul", type="string", length=45)
     */
    private $reglecalcul;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=45)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="finitionExterieur", type="string", length=45)
     */
    private $finitionexterieur;

    /**
     * @var string
     *
     * @ORM\Column(name="typeIsolant", type="string", length=45)
     */
    private $typeisolant;

    /**
     * @var string
     *
     * @ORM\Column(name="couverture", type="string", length=45)
     */
    private $couverture;

    /**
     * @var string
     *
     * @ORM\Column(name="qualiteHuisserie", type="string", length=45)
     */
    private $qualitehuisserie;

    /**
     * @var integer
     *
     * @ORM\Column(name="idGamme", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $idgamme;


    /**
     * Set reglecalcul
     *
     * @param string $reglecalcul
     *
     * @return Gamme
     */
    public function setReglecalcul($reglecalcul)
    {
        $this->reglecalcul = $reglecalcul;

        return $this;
    }

    /**
     * Get reglecalcul
     *
     * @return string
     */
    public function getReglecalcul()
    {
        return $this->reglecalcul;
    }

    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return Gamme
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set finitionexterieur
     *
     * @param string $finitionexterieur
     *
     * @return Gamme
     */
    public function setFinitionexterieur($finitionexterieur)
    {
        $this->finitionexterieur = $finitionexterieur;

        return $this;
    }

    /**
     * Get finitionexterieur
     *
     * @return string
     */
    public function getFinitionexterieur()
    {
        return $this->finitionexterieur;
    }

    /**
     * Set typeisolant
     *
     * @param string $typeisolant
     *
     * @return Gamme
     */
    public function setTypeisolant($typeisolant)
    {
        $this->typeisolant = $typeisolant;

        return $this;
    }

    /**
     * Get typeisolant
     *
     * @return string
     */
    public function getTypeisolant()
    {
        return $this->typeisolant;
    }

    /**
     * Set couverture
     *
     * @param string $couverture
     *
     * @return Gamme
     */
    public function setCouverture($couverture)
    {
        $this->couverture = $couverture;

        return $this;
    }

    /**
     * Get couverture
     *
     * @return string
     */
    public function getCouverture()
    {
        return $this->couverture;
    }

    /**
     * Set qualitehuisserie
     *
     * @param string $qualitehuisserie
     *
     * @return Gamme
     */
    public function setQualitehuisserie($qualitehuisserie)
    {
        $this->qualitehuisserie = $qualitehuisserie;

        return $this;
    }

    /**
     * Get qualitehuisserie
     *
     * @return string
     */
    public function getQualitehuisserie()
    {
        return $this->qualitehuisserie;
    }

    /**
     * Get idgamme
     *
     * @return integer
     */
    public function getIdgamme()
    {
        return $this->idgamme;
    }

    public function __toString() {
        return $this->nom;
    }
}

