<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Insee
 *
 * @ORM\Table(name="Insee")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\InseeRepository")
 */

class Insee
{
    /**
     * @var string
     *
     * @ORM\Column(name="nomVille", type="string", length=100)
     */
    private $nomville;

    /**
     * @var string
     *
     * @ORM\Column(name="codePostal", type="string", length=45)
     */
    private $codepostal;

    /**
     * @var integer
     *
     * @ORM\Column(name="idInsee", type="integer")
     * @ORM\Id
     */
    private $idinsee;


    /**
     * Set nomville
     *
     * @param string $nomville
     *
     * @return Insee
     */
    public function setNomville($nomville)
    {
        $this->nomville = $nomville;

        return $this;
    }

    /**
     * Get nomville
     *
     * @return string
     */
    public function getNomville()
    {
        return $this->nomville;
    }

    /**
     * Set codepostal
     *
     * @param string $codepostal
     *
     * @return Insee
     */
    public function setCodepostal($codepostal)
    {
        $this->codepostal = $codepostal;

        return $this;
    }

    /**
     * Get codepostal
     *
     * @return string
     */
    public function getCodepostal()
    {
        return $this->codepostal;
    }

    /**
     * Get idinsee
     *
     * @return integer
     */
    public function getIdinsee()
    {
        return $this->idinsee;
    }

    /**
     * Set idinsee
     *
     * @param string $idinsee
     *
     * @return Insee
     */
    public function setIdinsee($idinsee)
    {
        $this->idinsee = $idinsee;

        return $this;
    }

    public function __toString() {
        return $this->nomville;
    }

}

