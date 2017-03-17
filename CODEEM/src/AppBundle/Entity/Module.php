<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Module
 * @ORM\Table(name="Module")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ModuleRepository")
 */
class Module
{
    /**
     * @var string
     *
     * @ORM\Column(name="unite", type="string", length=45)
     */
    private $unite;

    /**
     * @var string
     *
     * @ORM\Column(name="nature", type="string", length=45)
     */
    private $nature;

    /**
     * @var string
     *
     * @ORM\Column(name="epaisseur", type="string", length=45)
     */
    private $epaisseur;

    /**
     * @var float
     *
     * @ORM\Column(name="longueur", type="float")
     */
    private $longueur;

    /**
     * @var float
     *
     * @ORM\Column(name="hauteur", type="float")
     */
    private $hauteur;

    /**
     * @var float
     *
     * @ORM\Column(name="angleentrant", type="float")
     */
    private $angleentrant;

    /**
     * @var float
     *
     * @ORM\Column(name="anglesortant", type="float")
     */
    private $anglesortant;

    /**
     * @var integer
     *
     * @ORM\Column(name="idmodule", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $idmodule;

    /**
     * @var \AppBundle\Entity\Gamme
     *
     * @ORM\ManyToOne(targetEntity="Gamme")
     * @ORM\JoinColumn(name="Gamme_idGamme", referencedColumnName="idGamme")
     */
    private $gamme;


    /**
     * Set unite
     *
     * @param string $unite
     *
     * @return Module
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
     * @return Module
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
     * Set epaisseur
     *
     * @param string $epaisseur
     *
     * @return Module
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
     * Set longueur
     *
     * @param float $longueur
     *
     * @return Module
     */
    public function setLongueur($longueur)
    {
        $this->longueur = $longueur;

        return $this;
    }

    /**
     * Get longueur
     *
     * @return float
     */
    public function getLongueur()
    {
        return $this->longueur;
    }

    /**
     * Set hauteur
     *
     * @param float $hauteur
     *
     * @return Module
     */
    public function setHauteur($hauteur)
    {
        $this->hauteur = $hauteur;

        return $this;
    }

    /**
     * Get hauteur
     *
     * @return float
     */
    public function getHauteur()
    {
        return $this->hauteur;
    }

    /**
     * Set angleentrant
     *
     * @param float $angleentrant
     *
     * @return Module
     */
    public function setAngleentrant($angleentrant)
    {
        $this->angleentrant = $angleentrant;

        return $this;
    }

    /**
     * Get angleentrant
     *
     * @return float
     */
    public function getAngleentrant()
    {
        return $this->angleentrant;
    }

    /**
     * Set anglesortant
     *
     * @param float $anglesortant
     *
     * @return Module
     */
    public function setAnglesortant($anglesortant)
    {
        $this->anglesortant = $anglesortant;

        return $this;
    }

    /**
     * Get anglesortant
     *
     * @return float
     */
    public function getAnglesortant()
    {
        return $this->anglesortant;
    }

    /**
     * Set idmodule
     *
     * @param integer $idmodule
     *
     * @return Module
     */
    public function setIdmodule($idmodule)
    {
        $this->idmodule = $idmodule;

        return $this;
    }

    /**
     * Get idmodule
     *
     * @return integer
     */
    public function getIdmodule()
    {
        return $this->idmodule;
    }

    /**
     * Set gamme
     *
     */
    public function setGamme(\AppBundle\Entity\Gamme $gamme)
    {
        $this->gamme = $gamme;

        return $this;
    }

    /**
     * Get gamme
     */
    public function getGamme()
    {
        return $this->gamme;
    }
}

