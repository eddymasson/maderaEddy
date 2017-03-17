<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Famillecomposant
 * @ORM\Table(name="FamilleComposant")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\FamilleComposantRepository")
 */
class Famillecomposant
{
    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=45)
     */
    private $nom;

    /**
     * @var integer
     *
     * @ORM\Column(name="idfamillecomposant", type="integer")
     * @ORM\Id
     */
    private $idfamillecomposant;


    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return Famillecomposant
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
     * Set idfamillecomposant
     *
     * @param integer $idfamillecomposant
     *
     * @return Famillecomposant
     */
    public function setIdfamillecomposant($idfamillecomposant)
    {
        $this->idfamillecomposant = $idfamillecomposant;

        return $this;
    }


    /**
     * Get idfamillecomposant
     *
     * @return integer
     */
    public function getIdfamillecomposant()
    {
        return $this->idfamillecomposant;
    }
}

